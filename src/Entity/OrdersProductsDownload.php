<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrdersProductsDownload
 */
#[ORM\Table(name: 'orders_products_download')]
#[ORM\Entity]
class OrdersProductsDownload
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'orders_products_download_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $ordersProductsDownloadId;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'orders_id', type: 'bigint', nullable: true)]
    private $ordersId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'orders_products_id', type: 'integer', nullable: false)]
    private $ordersProductsId = '0';

    /**
     * @var string
     */
    #[ORM\Column(name: 'orders_products_filename', type: 'string', length: 255, nullable: false)]
    private $ordersProductsFilename;

    /**
     * @var int
     */
    #[ORM\Column(name: 'download_maxdays', type: 'integer', nullable: false)]
    private $downloadMaxdays = '0';

    /**
     * @var int
     */
    #[ORM\Column(name: 'download_count', type: 'integer', nullable: false)]
    private $downloadCount = '0';

    public function getOrdersProductsDownloadId(): ?int
    {
        return $this->ordersProductsDownloadId;
    }

    public function getOrdersId(): ?string
    {
        return $this->ordersId;
    }

    public function setOrdersId(?string $ordersId): self
    {
        $this->ordersId = $ordersId;

        return $this;
    }

    public function getOrdersProductsId(): ?int
    {
        return $this->ordersProductsId;
    }

    public function setOrdersProductsId(int $ordersProductsId): self
    {
        $this->ordersProductsId = $ordersProductsId;

        return $this;
    }

    public function getOrdersProductsFilename(): ?string
    {
        return $this->ordersProductsFilename;
    }

    public function setOrdersProductsFilename(string $ordersProductsFilename): self
    {
        $this->ordersProductsFilename = $ordersProductsFilename;

        return $this;
    }

    public function getDownloadMaxdays(): ?int
    {
        return $this->downloadMaxdays;
    }

    public function setDownloadMaxdays(int $downloadMaxdays): self
    {
        $this->downloadMaxdays = $downloadMaxdays;

        return $this;
    }

    public function getDownloadCount(): ?int
    {
        return $this->downloadCount;
    }

    public function setDownloadCount(int $downloadCount): self
    {
        $this->downloadCount = $downloadCount;

        return $this;
    }


}
