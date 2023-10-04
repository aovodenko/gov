<?php

namespace App\Service;

use App\Entity\Categories;
use App\Repository\CategoriesRepository;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;

class CategoriesUrl {

    protected $categoriesRepository;
    protected $categoriesUrlCache;

    public function __construct(CategoriesRepository $categoriesRepository, CacheInterface $categoriesUrlCache) {
        $this->categoriesRepository = $categoriesRepository;
        $this->categoriesUrlCache = $categoriesUrlCache;
    }

    public function generate(string $cPath): string {
        return $this->categoriesUrlCache->get($cPath, function (ItemInterface $item) 
        {
            $categories_id_array = explode('_', $item->getKey());
            
            $categories_url_array = [];

            if (is_array($categories_id_array)) 
            {
                $categories_url_array = [];
                
                foreach ($categories_id_array as $categories_id) 
                {
                    $categories = $this->categoriesRepository->find($categories_id);

                    if ($categories) 
                    {
                        $categories_url_array[] = $categories->getCategoriesUrl();
                    }
                }
            }

            if (count($categories_url_array)) 
            {
                return implode('/', $categories_url_array);
            }

            return false;
        });
    }
}
