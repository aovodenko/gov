<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coupons
 */
#[ORM\Table(name: 'coupons')]
#[ORM\Entity]
class Coupons
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'coupon_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $couponId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'coupon_type', type: 'string', length: 1, nullable: false, options: ['default' => 'F', 'fixed' => true])]
    private $couponType = 'F';

    /**
     * @var string
     */
    #[ORM\Column(name: 'coupon_code', type: 'string', length: 32, nullable: false)]
    private $couponCode;

    /**
     * @var string
     */
    #[ORM\Column(name: 'coupon_amount', type: 'decimal', precision: 8, scale: 4, nullable: false, options: ['default' => '0.0000'])]
    private $couponAmount = '0.0000';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'coupon_amount_2', type: 'decimal', precision: 8, scale: 4, nullable: true)]
    private $couponAmount2;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'coupon_amount_3', type: 'decimal', precision: 8, scale: 4, nullable: true)]
    private $couponAmount3;

    /**
     * @var string
     */
    #[ORM\Column(name: 'coupon_minimum_order', type: 'decimal', precision: 8, scale: 4, nullable: false, options: ['default' => '0.0000'])]
    private $couponMinimumOrder = '0.0000';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'coupon_minimum_order_2', type: 'decimal', precision: 8, scale: 4, nullable: true)]
    private $couponMinimumOrder2;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'coupon_minimum_order_3', type: 'decimal', precision: 8, scale: 4, nullable: true)]
    private $couponMinimumOrder3;

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'coupon_start_date', type: 'datetime', nullable: false, options: ['default' => '0000-00-00 00:00:00'])]
    private $couponStartDate = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'coupon_expire_date', type: 'datetime', nullable: false, options: ['default' => '0000-00-00 00:00:00'])]
    private $couponExpireDate = '0000-00-00 00:00:00';

    /**
     * @var int
     */
    #[ORM\Column(name: 'uses_per_coupon', type: 'integer', nullable: false, options: ['default' => 1])]
    private $usesPerCoupon = 1;

    /**
     * @var int
     */
    #[ORM\Column(name: 'uses_per_user', type: 'integer', nullable: false)]
    private $usesPerUser = '0';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'restrict_to_products', type: 'string', length: 255, nullable: true)]
    private $restrictToProducts;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'restrict_to_categories', type: 'string', length: 255, nullable: true)]
    private $restrictToCategories;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'exclude_categories', type: 'string', length: 255, nullable: true)]
    private $excludeCategories;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'restrict_to_customers', type: 'text', length: 65535, nullable: true)]
    private $restrictToCustomers;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'restrict_to_orders', type: 'string', length: 255, nullable: true)]
    private $restrictToOrders;

    /**
     * @var string
     */
    #[ORM\Column(name: 'coupon_active', type: 'string', length: 1, nullable: false, options: ['default' => 'Y', 'fixed' => true])]
    private $couponActive = 'Y';

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'date_created', type: 'datetime', nullable: false, options: ['default' => '0000-00-00 00:00:00'])]
    private $dateCreated = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'date_modified', type: 'datetime', nullable: false, options: ['default' => '0000-00-00 00:00:00'])]
    private $dateModified = '0000-00-00 00:00:00';

    public function getCouponId(): ?int
    {
        return $this->couponId;
    }

    public function getCouponType(): ?string
    {
        return $this->couponType;
    }

    public function setCouponType(string $couponType): self
    {
        $this->couponType = $couponType;

        return $this;
    }

    public function getCouponCode(): ?string
    {
        return $this->couponCode;
    }

    public function setCouponCode(string $couponCode): self
    {
        $this->couponCode = $couponCode;

        return $this;
    }

    public function getCouponAmount(): ?string
    {
        return $this->couponAmount;
    }

    public function setCouponAmount(string $couponAmount): self
    {
        $this->couponAmount = $couponAmount;

        return $this;
    }

    public function getCouponAmount2(): ?string
    {
        return $this->couponAmount2;
    }

    public function setCouponAmount2(?string $couponAmount2): self
    {
        $this->couponAmount2 = $couponAmount2;

        return $this;
    }

    public function getCouponAmount3(): ?string
    {
        return $this->couponAmount3;
    }

    public function setCouponAmount3(?string $couponAmount3): self
    {
        $this->couponAmount3 = $couponAmount3;

        return $this;
    }

    public function getCouponMinimumOrder(): ?string
    {
        return $this->couponMinimumOrder;
    }

    public function setCouponMinimumOrder(string $couponMinimumOrder): self
    {
        $this->couponMinimumOrder = $couponMinimumOrder;

        return $this;
    }

    public function getCouponMinimumOrder2(): ?string
    {
        return $this->couponMinimumOrder2;
    }

    public function setCouponMinimumOrder2(?string $couponMinimumOrder2): self
    {
        $this->couponMinimumOrder2 = $couponMinimumOrder2;

        return $this;
    }

    public function getCouponMinimumOrder3(): ?string
    {
        return $this->couponMinimumOrder3;
    }

    public function setCouponMinimumOrder3(?string $couponMinimumOrder3): self
    {
        $this->couponMinimumOrder3 = $couponMinimumOrder3;

        return $this;
    }

    public function getCouponStartDate(): ?\DateTimeInterface
    {
        return $this->couponStartDate;
    }

    public function setCouponStartDate(\DateTimeInterface $couponStartDate): self
    {
        $this->couponStartDate = $couponStartDate;

        return $this;
    }

    public function getCouponExpireDate(): ?\DateTimeInterface
    {
        return $this->couponExpireDate;
    }

    public function setCouponExpireDate(\DateTimeInterface $couponExpireDate): self
    {
        $this->couponExpireDate = $couponExpireDate;

        return $this;
    }

    public function getUsesPerCoupon(): ?int
    {
        return $this->usesPerCoupon;
    }

    public function setUsesPerCoupon(int $usesPerCoupon): self
    {
        $this->usesPerCoupon = $usesPerCoupon;

        return $this;
    }

    public function getUsesPerUser(): ?int
    {
        return $this->usesPerUser;
    }

    public function setUsesPerUser(int $usesPerUser): self
    {
        $this->usesPerUser = $usesPerUser;

        return $this;
    }

    public function getRestrictToProducts(): ?string
    {
        return $this->restrictToProducts;
    }

    public function setRestrictToProducts(?string $restrictToProducts): self
    {
        $this->restrictToProducts = $restrictToProducts;

        return $this;
    }

    public function getRestrictToCategories(): ?string
    {
        return $this->restrictToCategories;
    }

    public function setRestrictToCategories(?string $restrictToCategories): self
    {
        $this->restrictToCategories = $restrictToCategories;

        return $this;
    }

    public function getExcludeCategories(): ?string
    {
        return $this->excludeCategories;
    }

    public function setExcludeCategories(?string $excludeCategories): self
    {
        $this->excludeCategories = $excludeCategories;

        return $this;
    }

    public function getRestrictToCustomers(): ?string
    {
        return $this->restrictToCustomers;
    }

    public function setRestrictToCustomers(?string $restrictToCustomers): self
    {
        $this->restrictToCustomers = $restrictToCustomers;

        return $this;
    }

    public function getRestrictToOrders(): ?string
    {
        return $this->restrictToOrders;
    }

    public function setRestrictToOrders(?string $restrictToOrders): self
    {
        $this->restrictToOrders = $restrictToOrders;

        return $this;
    }

    public function getCouponActive(): ?string
    {
        return $this->couponActive;
    }

    public function setCouponActive(string $couponActive): self
    {
        $this->couponActive = $couponActive;

        return $this;
    }

    public function getDateCreated(): ?\DateTimeInterface
    {
        return $this->dateCreated;
    }

    public function setDateCreated(\DateTimeInterface $dateCreated): self
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    public function getDateModified(): ?\DateTimeInterface
    {
        return $this->dateModified;
    }

    public function setDateModified(\DateTimeInterface $dateModified): self
    {
        $this->dateModified = $dateModified;

        return $this;
    }


}
