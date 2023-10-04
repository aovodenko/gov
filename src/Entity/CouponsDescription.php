<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CouponsDescription
 */
#[ORM\Table(name: 'coupons_description')]
#[ORM\Index(name: 'coupon_id', columns: ['coupon_id'])]
#[ORM\Entity]
class CouponsDescription
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'coupon_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $couponId = '0';

    /**
     * @var int
     */
    #[ORM\Column(name: 'language_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    private $languageId = '0';

    /**
     * @var string
     */
    #[ORM\Column(name: 'coupon_name', type: 'string', length: 32, nullable: false)]
    private $couponName;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'coupon_description', type: 'text', length: 65535, nullable: true)]
    private $couponDescription;

    public function getCouponId(): ?int
    {
        return $this->couponId;
    }

    public function getLanguageId(): ?int
    {
        return $this->languageId;
    }

    public function getCouponName(): ?string
    {
        return $this->couponName;
    }

    public function setCouponName(string $couponName): self
    {
        $this->couponName = $couponName;

        return $this;
    }

    public function getCouponDescription(): ?string
    {
        return $this->couponDescription;
    }

    public function setCouponDescription(?string $couponDescription): self
    {
        $this->couponDescription = $couponDescription;

        return $this;
    }


}
