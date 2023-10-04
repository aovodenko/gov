<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AmznReviews
 */
#[ORM\Table(name: 'amzn_reviews')]
#[ORM\Index(name: 'review', columns: ['review'])]
#[ORM\Entity]
class AmznReviews
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $id;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'asin', type: 'string', length: 256, nullable: true)]
    private $asin;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'review', type: 'string', length: 32, nullable: true)]
    private $review;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'rating', type: 'integer', nullable: true)]
    private $rating;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'title', type: 'string', length: 512, nullable: true)]
    private $title;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'author', type: 'string', length: 256, nullable: true)]
    private $author;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'profile', type: 'string', length: 256, nullable: true)]
    private $profile;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'date', type: 'date', nullable: true)]
    private $date;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'verified_purchase', type: 'integer', nullable: true)]
    private $verifiedPurchase = '0';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'review_text', type: 'text', length: 65535, nullable: true)]
    private $reviewText;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'mp', type: 'string', length: 2, nullable: true, options: ['default' => 'us', 'fixed' => true])]
    private $mp = 'us';

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'date_added', type: 'datetime', nullable: true, options: ['default' => 'CURRENT_TIMESTAMP'])]
    private $dateAdded = 'CURRENT_TIMESTAMP';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAsin(): ?string
    {
        return $this->asin;
    }

    public function setAsin(?string $asin): self
    {
        $this->asin = $asin;

        return $this;
    }

    public function getReview(): ?string
    {
        return $this->review;
    }

    public function setReview(?string $review): self
    {
        $this->review = $review;

        return $this;
    }

    public function getRating(): ?int
    {
        return $this->rating;
    }

    public function setRating(?int $rating): self
    {
        $this->rating = $rating;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(?string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getProfile(): ?string
    {
        return $this->profile;
    }

    public function setProfile(?string $profile): self
    {
        $this->profile = $profile;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getVerifiedPurchase(): ?int
    {
        return $this->verifiedPurchase;
    }

    public function setVerifiedPurchase(?int $verifiedPurchase): self
    {
        $this->verifiedPurchase = $verifiedPurchase;

        return $this;
    }

    public function getReviewText(): ?string
    {
        return $this->reviewText;
    }

    public function setReviewText(?string $reviewText): self
    {
        $this->reviewText = $reviewText;

        return $this;
    }

    public function getMp(): ?string
    {
        return $this->mp;
    }

    public function setMp(?string $mp): self
    {
        $this->mp = $mp;

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


}
