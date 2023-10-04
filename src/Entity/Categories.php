<?php

namespace App\Entity;

use App\Entity\Products;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * Categories
 */
#[ORM\Table(name: 'categories')]
#[ORM\Index(name: 'idx_categories_parent_id', columns: ['parent_id'])]
#[ORM\Entity(repositoryClass: 'App\Repository\CategoriesRepository')]
class Categories
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'categories_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $categoriesId;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'categories_image', type: 'string', length: 64, nullable: true)]
    private $categoriesImage;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'sliders_id', type: 'integer', nullable: true)]
    private $slidersId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'parent_id', type: 'integer', nullable: false)]
    private $parentId = '0';

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'templates_id', type: 'integer', nullable: true)]
    private $templatesId = '0';

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'sort_order', type: 'integer', nullable: true)]
    private $sortOrder;

    /**
     * @var bool|null
     */
    #[ORM\Column(name: 'categories_status', type: 'boolean', nullable: true, options: ['default' => 1])]
    private $categoriesStatus = true;

    /**
     * @var bool|null
     */
    #[ORM\Column(name: 'categories_hidden', type: 'boolean', nullable: true, options: ['default' => 1])]
    private $categoriesHidden = true;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'date_added', type: 'datetime', nullable: true)]
    private $dateAdded;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'last_modified', type: 'datetime', nullable: true)]
    private $lastModified;
    
    #[ORM\OneToMany(targetEntity: 'App\Entity\CategoriesDescription', mappedBy: 'categories', fetch: 'EAGER')]
    private $categoriesDescription; 
    
    private $categoriesUrl;
    
    private $categoriesName;

    #[ORM\ManyToMany(targetEntity: 'App\Entity\Products', mappedBy: 'categories')]
    private Collection $products;
    
    public function __construct()
    {
        $this->categoriesDescription = new ArrayCollection();
        $this->products = new ArrayCollection();
    }    

    public function getCategoriesId(): ?int
    {
        return $this->categoriesId;
    }

    public function getCategoriesImage(): ?string
    {
        return $this->categoriesImage;
    }

    public function setCategoriesImage(?string $categoriesImage): self
    {
        $this->categoriesImage = $categoriesImage;

        return $this;
    }

    public function getSlidersId(): ?int
    {
        return $this->slidersId;
    }

    public function setSlidersId(?int $slidersId): self
    {
        $this->slidersId = $slidersId;

        return $this;
    }

    public function getParentId(): ?int
    {
        return $this->parentId;
    }

    public function setParentId(int $parentId): self
    {
        $this->parentId = $parentId;

        return $this;
    }

    public function getTemplatesId(): ?int
    {
        return $this->templatesId;
    }

    public function setTemplatesId(?int $templatesId): self
    {
        $this->templatesId = $templatesId;

        return $this;
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

    public function getCategoriesStatus(): ?bool
    {
        return $this->categoriesStatus;
    }

    public function setCategoriesStatus(?bool $categoriesStatus): self
    {
        $this->categoriesStatus = $categoriesStatus;

        return $this;
    }

    public function getCategoriesHidden(): ?bool
    {
        return $this->categoriesHidden;
    }

    public function setCategoriesHidden(?bool $categoriesHidden): self
    {
        $this->categoriesHidden = $categoriesHidden;

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

    public function getLastModified(): ?\DateTimeInterface
    {
        return $this->lastModified;
    }

    public function setLastModified(?\DateTimeInterface $lastModified): self
    {
        $this->lastModified = $lastModified;

        return $this;
    }
    
    public function getCategoriesDescription(): Collection
    {
        return $this->categoriesDescription;
    }

    public function setCategoriesDescription($categoriesDescription): self
    {
        $this->categoriesDescription = $categoriesDescription;

        return $this;
    }    
    
    public function getCategoriesName($languages_id = 1): ?string
    {
        if(is_null($this->categoriesName)){
          foreach($this->categoriesDescription as $categoriesDescription){
            if($categoriesDescription->getLanguageId() == $languages_id){
              $this->categoriesName = $categoriesDescription->getCategoriesName();
            }
          }
        }

        return $this->categoriesName;
    }    

    public function getCategoriesUrl($languages_id = 1): ?string
    {
        if(is_null($this->categoriesUrl)){
          foreach($this->categoriesDescription as $categoriesDescription){
            if($categoriesDescription->getLanguageId() == $languages_id){
              $this->categoriesUrl = $categoriesDescription->getCategoriesUrl();
            }
          }
        }

        return $this->categoriesUrl;
    }

    /**
     * @return Collection<int, Products>
     */
    public function getProducts(): Collection
    {
        return $this->products;
    }

    public function addProduct(Products $product): self
    {
        if (!$this->products->contains($product)) {
            $this->products->add($product);
            $product->addCategory($this);
        }

        return $this;
    }

    public function removeProduct(Products $product): self
    {
        if ($this->products->removeElement($product)) {
            $product->removeCategory($this);
        }

        return $this;
    }
}
