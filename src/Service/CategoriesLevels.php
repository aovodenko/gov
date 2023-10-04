<?php
namespace App\Service;

use App\Entity\Categories;
use App\Repository\CategoriesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;

class CategoriesLevels {

    protected $categoriesLevels;
    protected $categoriesRepository;
    protected $categoriesLevelsCache;

    public function __construct(CategoriesRepository $categoriesRepository, CacheInterface $categoriesLevelsCache) 
    {
        $this->categoriesRepository = $categoriesRepository;
        $this->categoriesLevelsCache = $categoriesLevelsCache;
        $this->categoriesLevels = [];
    }

    public function setCategoriesLevels($cPath = 0, $level = 0) 
    {
        if ($level < 3) 
        {
            $parent_id_array = explode('_', $cPath);
            $parent_id = $parent_id_array[count($parent_id_array) - 1];
            
            $categories = $this->categoriesRepository->getParentCategory($parent_id);

            foreach($categories as $category) 
            {
                $this->categoriesLevels[$level][($cPath ?: 0)][($cPath ? $cPath . '_' : '') . $category->getCategoriesId()] = $category->getCategoriesName();

                $this->setCategoriesLevels(($cPath ? $cPath . '_' : '') . $category->getCategoriesId(), $level + 1);
            }
        }

        return true;
    }
    
    public function getCategoriesLevels(): array
    {
        return $this->categoriesLevelsCache->get('categoriesLevels', function(ItemInterface $item){
            $this->setCategoriesLevels();

            //var_dump($this->categoriesLevels); die;
            
            return $this->categoriesLevels;
        });        
    }

}
