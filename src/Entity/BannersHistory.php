<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BannersHistory
 */
#[ORM\Table(name: 'banners_history')]
#[ORM\Entity]
class BannersHistory
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'banners_history_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $bannersHistoryId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'banners_id', type: 'integer', nullable: false)]
    private $bannersId = '0';

    /**
     * @var int
     */
    #[ORM\Column(name: 'banners_shown', type: 'integer', nullable: false)]
    private $bannersShown = '0';

    /**
     * @var int
     */
    #[ORM\Column(name: 'banners_clicked', type: 'integer', nullable: false)]
    private $bannersClicked = '0';

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'banners_history_date', type: 'datetime', nullable: false, options: ['default' => '0000-00-00 00:00:00'])]
    private $bannersHistoryDate = '0000-00-00 00:00:00';

    public function getBannersHistoryId(): ?int
    {
        return $this->bannersHistoryId;
    }

    public function getBannersId(): ?int
    {
        return $this->bannersId;
    }

    public function setBannersId(int $bannersId): self
    {
        $this->bannersId = $bannersId;

        return $this;
    }

    public function getBannersShown(): ?int
    {
        return $this->bannersShown;
    }

    public function setBannersShown(int $bannersShown): self
    {
        $this->bannersShown = $bannersShown;

        return $this;
    }

    public function getBannersClicked(): ?int
    {
        return $this->bannersClicked;
    }

    public function setBannersClicked(int $bannersClicked): self
    {
        $this->bannersClicked = $bannersClicked;

        return $this;
    }

    public function getBannersHistoryDate(): ?\DateTimeInterface
    {
        return $this->bannersHistoryDate;
    }

    public function setBannersHistoryDate(\DateTimeInterface $bannersHistoryDate): self
    {
        $this->bannersHistoryDate = $bannersHistoryDate;

        return $this;
    }


}
