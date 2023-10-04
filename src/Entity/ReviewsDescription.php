<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReviewsDescription
 */
#[ORM\Table(name: 'reviews_description')]
#[ORM\Entity]
class ReviewsDescription
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'reviews_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $reviewsId = '0';

    /**
     * @var int
     */
    #[ORM\Column(name: 'languages_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $languagesId = '0';

    /**
     * @var string
     */
    #[ORM\Column(name: 'reviews_text', type: 'text', length: 65535, nullable: false)]
    private $reviewsText;

    public function getReviewsId(): ?int
    {
        return $this->reviewsId;
    }

    public function getLanguagesId(): ?int
    {
        return $this->languagesId;
    }

    public function getReviewsText(): ?string
    {
        return $this->reviewsText;
    }

    public function setReviewsText(string $reviewsText): self
    {
        $this->reviewsText = $reviewsText;

        return $this;
    }


}
