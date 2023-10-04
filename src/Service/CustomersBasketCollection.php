<?php
namespace App\Service;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\HttpFoundation\RequestStack;

class CustomersBasketCollection
{
    protected $requestStack;
    protected $customersBasketCollection;
    protected $total_items;
    protected $total;
    protected $weight;
    protected $giftwrapTotal;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;

        $this->customersBasketCollection = new ArrayCollection();
    }

    public function setCustomersBasketCollection(): self
    {
        $session = $this->requestStack->getSession();

        if($customersBasketCollection = $session->get('customersBasketCollection')){
          $this->customersBasketCollection = $customersBasketCollection;
        }

        return $this;
    }

    public function getCustomersBasketCollection(): ?Collection
    {
      return $this->customersBasketCollection;
    }

    public function getQuantity($products_id)
    {
      foreach($this->customersBasketCollection as $customersBasket){
        if($products_id == $customersBasket->getProductsId()){
          return $customersBasket->getCustomersBasketQuantity();
        }
      }

      return 0;
    }

    public function countContents()
    {
      if(is_numeric($this->total_items)){
        return $this->total_items;
      }

      $this->total_items = 0;

      foreach($this->customersBasketCollection as $customersBasket){
        $this->total_items += $customersBasket->getCustomersBasketQuantity();
      }

      return $this->total_items;
    }

    public function getTotal()
    {
      if(is_numeric($this->total)){
        return $this->total;
      }

      $this->total = 0;

      foreach($this->customersBasketCollection as $customersBasket){
        $product = $customersBasket->getProducts();

        $this->total += $product->getFinalPrice() * $customersBasket->getCustomersBasketQuantity();
      }

      return $this->total;
    }

    public function getWeight()
    {
      if(is_numeric($this->weight)){
        return $this->weight;
      }

      $this->weight = 0;

      foreach($this->customersBasketCollection as $customersBasket){
        $product = $customersBasket->getProducts();

        $this->weight += $product->getProductsWeight() * $customersBasket->getCustomersBasketQuantity();
      }

      return $this->weight;
    }

    public function getGiftwrapSelected()
    {
      foreach($this->customersBasketCollection as $customersBasket){
        if($customersBasket->getGiftwrapId()){
          return true;
        }
      }

      return false;
    }

    public function getGiftwrapTotal()
    {
      if(is_numeric($this->giftwrapTotal)){
        return $this->giftwrapTotal;
      }

      $this->giftwrapTotal = 0;

      foreach($this->customersBasketCollection as $customersBasket){
        if($customersBasket->getGiftwrapId()){
          $giftwrap = $customersBasket->getGiftwrap();

          $this->giftwrapTotal += $customersBasket->getCustomersBasketQuantity() * $giftwrap->getGiftwrapPrice();
        }
      }

      return $this->giftwrapTotal;
    }
}
