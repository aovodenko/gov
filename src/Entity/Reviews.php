<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reviews
 */
#[ORM\Table(name: 'reviews')]
#[ORM\Entity]
class Reviews
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'reviews_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $reviewsId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'products_id', type: 'integer', nullable: false)]
    private $productsId = '0';

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'customers_id', type: 'integer', nullable: true)]
    private $customersId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'customers_name', type: 'string', length: 64, nullable: false)]
    private $customersName;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'reviews_rating', type: 'integer', nullable: true)]
    private $reviewsRating;

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

    /**
     * @var int
     */
    #[ORM\Column(name: 'reviews_read', type: 'integer', nullable: false)]
    private $reviewsRead = '0';

    /**
     * @var bool|null
     */
    #[ORM\Column(name: 'approved', type: 'boolean', nullable: true)]
    private $approved = '0';

    /**
     * @var bool|null
     */
    #[ORM\Column(name: 'goog_block', type: 'boolean', nullable: true)]
    private $googBlock = '0';

    #[ORM\ManyToOne(inversedBy: 'reviews')]
    #[ORM\JoinColumn(name: 'products_id', referencedColumnName: 'products_id', nullable: false)]
    private ?Products $products = null;

    public function getReviewsId(): ?int
    {
        return $this->reviewsId;
    }

    public function getProductsId(): ?int
    {
        return $this->productsId;
    }

    public function setProductsId(int $productsId): self
    {
        $this->productsId = $productsId;

        return $this;
    }

    public function getCustomersId(): ?int
    {
        return $this->customersId;
    }

    public function setCustomersId(?int $customersId): self
    {
        $this->customersId = $customersId;

        return $this;
    }

    public function getCustomersName(): ?string
    {
        return $this->customersName;
    }

    public function setCustomersName(string $customersName): self
    {
        $this->customersName = $customersName;

        return $this;
    }

    public function getReviewsRating(): ?int
    {
        return $this->reviewsRating;
    }

    public function setReviewsRating(?int $reviewsRating): self
    {
        $this->reviewsRating = $reviewsRating;

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

    public function getReviewsRead(): ?int
    {
        return $this->reviewsRead;
    }

    public function setReviewsRead(int $reviewsRead): self
    {
        $this->reviewsRead = $reviewsRead;

        return $this;
    }

    public function getApproved(): ?bool
    {
        return $this->approved;
    }

    public function setApproved(?bool $approved): self
    {
        $this->approved = $approved;

        return $this;
    }

    public function getGoogBlock(): ?bool
    {
        return $this->googBlock;
    }

    public function setGoogBlock(?bool $googBlock): self
    {
        $this->googBlock = $googBlock;

        return $this;
    }

    public function getProducts(): ?Products
    {
        return $this->products;
    }

    public function setProducts(?Products $products): self
    {
        $this->products = $products;

        return $this;
    }


}
