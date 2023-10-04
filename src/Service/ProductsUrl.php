<?php

namespace App\Service;

use App\Entity\Products;
use App\Entity\Categories;
use App\Repository\ProductsRepository;
use App\Repository\CategoriesRepository;
use App\Service\CategoriesUrl;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;

class ProductsUrl {

    protected $productsRepository;
    protected $categoriesRepository;
    protected $categoriesUrl;
    protected $productsUrlCache;
    protected $parentCategories = [];

    public function __construct(ProductsRepository $productsRepository, CategoriesRepository $categoriesRepository, CategoriesUrl $categoriesUrl, CacheInterface $productsUrlCache) {
        $this->productsRepository = $productsRepository;
        $this->categoriesRepository = $categoriesRepository;
        $this->categoriesUrl = $categoriesUrl;
        $this->productsUrlCache = $productsUrlCache;
    }

    public function generate(int $products_id, string $cPath = ''): string {
        return $this->productsUrlCache->get($products_id . '|' . $cPath, function (ItemInterface $item)
        {
            $products_url = '';

            list($products_id, $cPath) = explode('|', $item->getKey());

            if($products = $this->productsRepository->findOneBy(['productsId' => $products_id]))
            {

                $products_url = preg_replace('/[^a-z1-9]+/', '-', strtolower($products->getProductsName()));

                $categories_url = '';
                
                if($cPath)
                {
                    $categories_url = $this->categoriesUrl->generate($cPath);
                }
                else{
                    $categories = $products->getCategories();
 
                    if($categories)
                    {
                        foreach($categories as $category){
                            $this->parentCategories = [];
                            
                            if($category->getCategoriesStatus() == 1)
                            {
                                $this->parentCategories[0] = $category->getCategoriesId();
                                
                                $this->setParentCategories($category->getCategoriesId());
                    
                                if(count($this->parentCategories))
                                {
                                    $cPath = implode('_', array_reverse($this->parentCategories));
                        
                                    if($categories_url = $this->categoriesUrl->generate($cPath))
                                    {
                                        break;
                                    }        
                                }                                
                            }
                        }
                    }
                }
            }
            
            if($categories_url)
            {
                $products_url = $categories_url . '/' . $products_url;
            }

            return $products_url;
        });
    }
    
  protected function setParentCategories($categories_id) {
    $parent = $this->categoriesRepository->find($categories_id);
    
    if($parent->getParentId() == 0)
    {
        return true;
    }
    
    $this->parentCategories[sizeof($this->parentCategories)] = $parent->getParentId();
    
    if($parent->getParentId() != $categories_id)
    {
        $this->setParentCategories($parent->getParentId());
    }
  }    
}
