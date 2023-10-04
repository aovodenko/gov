<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WsProducts
 */
#[ORM\Table(name: 'ws_products')]
#[ORM\Entity]
class WsProducts
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'ws_products_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $wsProductsId;

    /**
     * @var bool
     */
    #[ORM\Column(name: 'status', type: 'boolean', nullable: false)]
    private $status = '0';

    /**
     * @var string
     */
    #[ORM\Column(name: 'model', type: 'string', length: 18, nullable: false)]
    private $model;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'category', type: 'string', length: 64, nullable: true)]
    private $category;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'subcategory', type: 'string', length: 64, nullable: true)]
    private $subcategory;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'image', type: 'string', length: 64, nullable: true)]
    private $image;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'manufacturer', type: 'string', length: 64, nullable: true)]
    private $manufacturer;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'notes', type: 'text', length: 0, nullable: true)]
    private $notes;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'notes2', type: 'text', length: 0, nullable: true)]
    private $notes2;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'page', type: 'smallint', nullable: true)]
    private $page;

    /**
     * @var string
     */
    #[ORM\Column(name: 'price', type: 'decimal', precision: 15, scale: 4, nullable: false, options: ['default' => '0.0000'])]
    private $price = '0.0000';

    /**
     * @var string
     */
    #[ORM\Column(name: 'fx_rate', type: 'decimal', precision: 5, scale: 2, nullable: false, options: ['default' => '0.00'])]
    private $fxRate = '0.00';

    /**
     * @var string
     */
    #[ORM\Column(name: 'factor', type: 'decimal', precision: 5, scale: 2, nullable: false, options: ['default' => '0.00'])]
    private $factor = '0.00';

    public function getWsProductsId(): ?int
    {
        return $this->wsProductsId;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(?string $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getSubcategory(): ?string
    {
        return $this->subcategory;
    }

    public function setSubcategory(?string $subcategory): self
    {
        $this->subcategory = $subcategory;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getManufacturer(): ?string
    {
        return $this->manufacturer;
    }

    public function setManufacturer(?string $manufacturer): self
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): self
    {
        $this->notes = $notes;

        return $this;
    }

    public function getNotes2(): ?string
    {
        return $this->notes2;
    }

    public function setNotes2(?string $notes2): self
    {
        $this->notes2 = $notes2;

        return $this;
    }

    public function getPage(): ?int
    {
        return $this->page;
    }

    public function setPage(?int $page): self
    {
        $this->page = $page;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(string $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getFxRate(): ?string
    {
        return $this->fxRate;
    }

    public function setFxRate(string $fxRate): self
    {
        $this->fxRate = $fxRate;

        return $this;
    }

    public function getFactor(): ?string
    {
        return $this->factor;
    }

    public function setFactor(string $factor): self
    {
        $this->factor = $factor;

        return $this;
    }


}
