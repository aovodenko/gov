<?php

namespace App\EventListener;

use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Entity\Configuration;
use App\Entity\CustomersBasket;
use App\Entity\CustomersBasketAttributes;
use App\Entity\Products;
use App\Entity\GiftwrapOptions;
use App\Entity\ProductsOptions;
use App\Entity\ProductsOptionsValues;
use App\Entity\Wishlists;

class SessionHandler {

    protected $entityManager;
    protected $productsCache;

    public function __construct(ManagerRegistry $doctrine, CacheInterface $productsCache) {
        $this->entityManager = $doctrine->getManager();
        $this->productsCache = $productsCache;
    }

    public function onKernelRequest(RequestEvent $event) {
        $session = $event->getRequest()->getSession();

        $session->start();

        if (!isset($_SESSION)) {
            return;
        }

        $session->clear();

        foreach ($_SESSION as $key => $value) {
            if (is_object($value)) {
                $sess_array = (array) $value;
                $sess_object = null;

                if (isset($sess_array['__PHP_Incomplete_Class_Name'])) {
                    switch ($sess_array['__PHP_Incomplete_Class_Name']) {
                        case 'shoppingCart':
                            $customersBasketCollection = new ArrayCollection;
                            $customersBasketArray = [];

                            unset($sess_array['__PHP_Incomplete_Class_Name']);

                            foreach ($sess_array['contents'] as $productsId => $products) {
                                if (isset($products['qty']) && $products['qty'] > 0) {
                                    $customersBasketArray[$productsId] = new CustomersBasket();

                                    $product = $this->productsCache->get(preg_replace('/[{}]/', '_', $productsId), function (ItemInterface $item) use ($products) {
                                        $product = $this->entityManager->getRepository(Products::class)->find(explode('_', $item->getKey())[0]);

                                        if ($product) {
                                            $attributes = [];
                                            $attributes_price = 0;

                                            if (isset($products['attributes'])) {
                                                foreach ($products['attributes'] as $optionsId => $optionsValueId) {
                                                    $productsAttribute = $product->getProductsAttribute($optionsId, $optionsValueId)->first();

                                                    if ($productsAttribute) {
                                                        $attributes[(int) $productsAttribute->getOptionsId()] = (int) $productsAttribute->getOptionsValuesId();
                                                    }
                                                }
                                            }

                                            $product->setAttributes($attributes);

                                            $attributes_price = $product->getProductsAttributesPrice();

                                            $product->setProductsAttributesPrice($attributes_price);
                                        }

                                        return $product ?: false;
                                    });
//var_dump($product);
                                    if ($product) {
                                        if (isset($products['giftwrap_id']) && $products['giftwrap_id']) {
                                            $customersBasketArray[$productsId]->setGiftwrapId($products['giftwrap_id']);

                                            $giftwrap = $this->entityManager->getRepository(GiftwrapOptions::class)->find((int) $products['giftwrap_id']);
                                            $customersBasketArray[$productsId]->setGiftwrap($giftwrap);
                                        }

                                        if (isset($products['gvTo'])) {
                                            $customersBasketArray[$productsId]->setGvTo($products['gvTo']);
                                        }

                                        if (isset($products['gvFrom'])) {
                                            $customersBasketArray[$productsId]->gvFrom($products['gvFrom']);
                                        }

                                        if (isset($products['qty'])) {
                                            $customersBasketArray[$productsId]->setCustomersBasketQuantity($products['qty']);
                                        }

                                        if (isset($products['attributes'])) {
                                            $customersBasketAttributesArray = [];

                                            foreach ($products['attributes'] as $optionsId => $optionsValueId) {
                                                $customersBasketAttributesArray[$optionsId] = new CustomersBasketAttributes();

                                                $productsOptions = $this->entityManager->getRepository(ProductsOptions::class)->find((int) $optionsId);
                                                $productsOptionsValues = $this->entityManager->getRepository(ProductsOptionsValues::class)->find((int) $optionsValueId);

                                                $customersBasketAttributesArray[$optionsId]
                                                        ->setProductsId($productsId)
                                                        ->setProductsOptionsId($optionsId)
                                                        ->setProductsOptionsValueId($optionsValueId)
                                                        ->setProductsOptions($productsOptions)
                                                        ->setProductsOptionsValue($productsOptionsValues)
                                                ;

                                                $customersBasketArray[$productsId]->addCustomersBasketAttribute($customersBasketAttributesArray[$optionsId]);
                                            }
                                        }

                                        $customersBasketArray[$productsId]->setFinalPrice($product->getFinalPrice());

                                        $customersBasketArray[$productsId]
                                                ->setProductsId($productsId)
                                                ->setProducts($product)
                                        ;

                                        $customersBasketCollection->add($customersBasketArray[$productsId]);
                                    }
                                }
                            }
//var_dump($customersBasketCollection); die;
                            $session->set('customersBasketCollection', $customersBasketCollection);

                            break;

                        case 'WishList':
                            $wishlistsCollection = new ArrayCollection;
                            $wishlistsArray = [];

                            unset($sess_array['__PHP_Incomplete_Class_Name']);

                            foreach ($sess_array['contents'] as $wishlistsId => $wishlists) {
                                $wishlistsArray[$wishlistsId] = new Wishlists();

                                $wishlistsArray[$wishlistsId]
                                        ->setWishlistsId($wishlistsId)
                                        ->setWishlistsLabel($wishlists['label'])
                                ;

                                $wishlistsCollection->add($wishlistsArray[$wishlistsId]);
                            }

                            $iterator = $wishlistsCollection->getIterator();
                            $iterator->uasort(function ($a, $b) {
                                return ($a->getWishlistsId() > $b->getWishlistsId()) ? -1 : 1;
                            });
                            $wishlistsCollection = new ArrayCollection(iterator_to_array($iterator));

                            $session->set('wishlistsCollection', $wishlistsCollection);

                            break;
                    }
                }
            } else {
                $session->set($key, $value);
            }
        }

        if (!$session->has('currency')) {
            $session->set('currency', $this->entityManager->getRepository(Configuration::class)->getConfigParam('DEFAULT_CURRENCY'));
        }
    }

}
