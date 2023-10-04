<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AffiliateNews
 */
#[ORM\Table(name: 'affiliate_news')]
#[ORM\Entity]
class AffiliateNews
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'news_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $newsId;

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'date_added', type: 'datetime', nullable: false, options: ['default' => '0000-00-00 00:00:00'])]
    private $dateAdded = '0000-00-00 00:00:00';

    /**
     * @var bool
     */
    #[ORM\Column(name: 'news_status', type: 'boolean', nullable: false)]
    private $newsStatus = '0';

    public function getNewsId(): ?int
    {
        return $this->newsId;
    }

    public function getDateAdded(): ?\DateTimeInterface
    {
        return $this->dateAdded;
    }

    public function setDateAdded(\DateTimeInterface $dateAdded): self
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    public function getNewsStatus(): ?bool
    {
        return $this->newsStatus;
    }

    public function setNewsStatus(bool $newsStatus): self
    {
        $this->newsStatus = $newsStatus;

        return $this;
    }


}
