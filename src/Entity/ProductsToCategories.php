<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductsToCategories
 */
#[ORM\Table(name: 'products_to_categories')]
#[ORM\Entity]
class ProductsToCategories
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'products_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $productsId = '0';

    /**
     * @var int
     */
    #[ORM\Column(name: 'categories_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $categoriesId = '0';

    public function getProductsId(): ?int
    {
        return $this->productsId;
    }

    public function getCategoriesId(): ?int
    {
        return $this->categoriesId;
    }


}
