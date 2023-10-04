<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AmznSellerFeedbacks
 */
#[ORM\Table(name: 'amzn_seller_feedbacks')]
#[ORM\Entity]
class AmznSellerFeedbacks
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $id;

    /**
     * @var \DateTime|null
     */
    #[ORM\Column(name: 'date', type: 'date', nullable: true)]
    private $date;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'rating', type: 'integer', nullable: true)]
    private $rating = '0';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'comments', type: 'text', length: 65535, nullable: true)]
    private $comments;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'your_response', type: 'text', length: 65535, nullable: true)]
    private $yourResponse;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'arrived_on_time', type: 'string', length: 256, nullable: true)]
    private $arrivedOnTime;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'item_as_described', type: 'string', length: 256, nullable: true)]
    private $itemAsDescribed;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'customer_service', type: 'string', length: 256, nullable: true)]
    private $customerService;

    /**
     * @var string
     */
    #[ORM\Column(name: 'order_id', type: 'string', length: 256, nullable: false)]
    private $orderId;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'rater_email', type: 'string', length: 256, nullable: true)]
    private $raterEmail;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'rater_role', type: 'string', length: 256, nullable: true)]
    private $raterRole;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getRating(): ?int
    {
        return $this->rating;
    }

    public function setRating(?int $rating): self
    {
        $this->rating = $rating;

        return $this;
    }

    public function getComments(): ?string
    {
        return $this->comments;
    }

    public function setComments(?string $comments): self
    {
        $this->comments = $comments;

        return $this;
    }

    public function getYourResponse(): ?string
    {
        return $this->yourResponse;
    }

    public function setYourResponse(?string $yourResponse): self
    {
        $this->yourResponse = $yourResponse;

        return $this;
    }

    public function getArrivedOnTime(): ?string
    {
        return $this->arrivedOnTime;
    }

    public function setArrivedOnTime(?string $arrivedOnTime): self
    {
        $this->arrivedOnTime = $arrivedOnTime;

        return $this;
    }

    public function getItemAsDescribed(): ?string
    {
        return $this->itemAsDescribed;
    }

    public function setItemAsDescribed(?string $itemAsDescribed): self
    {
        $this->itemAsDescribed = $itemAsDescribed;

        return $this;
    }

    public function getCustomerService(): ?string
    {
        return $this->customerService;
    }

    public function setCustomerService(?string $customerService): self
    {
        $this->customerService = $customerService;

        return $this;
    }

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function setOrderId(string $orderId): self
    {
        $this->orderId = $orderId;

        return $this;
    }

    public function getRaterEmail(): ?string
    {
        return $this->raterEmail;
    }

    public function setRaterEmail(?string $raterEmail): self
    {
        $this->raterEmail = $raterEmail;

        return $this;
    }

    public function getRaterRole(): ?string
    {
        return $this->raterRole;
    }

    public function setRaterRole(?string $raterRole): self
    {
        $this->raterRole = $raterRole;

        return $this;
    }


}
