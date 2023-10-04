<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WmProducts
 */
#[ORM\Table(name: 'wm_products')]
#[ORM\Entity]
class WmProducts
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'products_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $productsId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'products_model', type: 'string', length: 255, nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $productsModel;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'wm_id', type: 'string', length: 255, nullable: true)]
    private $wmId;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'wm_category', type: 'string', length: 255, nullable: true)]
    private $wmCategory;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'wm_subcategory', type: 'string', length: 255, nullable: true)]
    private $wmSubcategory;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'date_added', type: 'datetime', nullable: true, options: ['default' => 'CURRENT_TIMESTAMP'])]
    private $dateAdded = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'date_modified', type: 'datetime', nullable: true)]
    private $dateModified;

    public function getProductsId(): ?int
    {
        return $this->productsId;
    }

    public function getProductsModel(): ?string
    {
        return $this->productsModel;
    }

    public function getWmId(): ?string
    {
        return $this->wmId;
    }

    public function setWmId(?string $wmId): self
    {
        $this->wmId = $wmId;

        return $this;
    }

    public function getWmCategory(): ?string
    {
        return $this->wmCategory;
    }

    public function setWmCategory(?string $wmCategory): self
    {
        $this->wmCategory = $wmCategory;

        return $this;
    }

    public function getWmSubcategory(): ?string
    {
        return $this->wmSubcategory;
    }

    public function setWmSubcategory(?string $wmSubcategory): self
    {
        $this->wmSubcategory = $wmSubcategory;

        return $this;
    }

    public function getDateAdded(): ?\DateTimeInterface
    {
        return $this->dateAdded;
    }

    public function setDateAdded(?\DateTimeInterface $dateAdded): self
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    public function getDateModified(): ?\DateTimeInterface
    {
        return $this->dateModified;
    }

    public function setDateModified(?\DateTimeInterface $dateModified): self
    {
        $this->dateModified = $dateModified;

        return $this;
    }


}
