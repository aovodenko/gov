<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LandingPagesProducts
 */
#[ORM\Table(name: 'landing_pages_products')]
#[ORM\Entity]
class LandingPagesProducts
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'page_id', type: 'smallint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $pageId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'product_id', type: 'smallint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $productId = '0';

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'sort_order', type: 'smallint', nullable: true)]
    private $sortOrder;

    public function getPageId(): ?int
    {
        return $this->pageId;
    }

    public function getProductId(): ?int
    {
        return $this->productId;
    }

    public function getSortOrder(): ?int
    {
        return $this->sortOrder;
    }

    public function setSortOrder(?int $sortOrder): self
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }


}
