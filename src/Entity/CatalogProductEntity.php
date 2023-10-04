<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CatalogProductEntity
 */
#[ORM\Table(name: 'catalog_product_entity')]
#[ORM\Index(name: 'CATALOG_PRODUCT_ENTITY_ATTRIBUTE_SET_ID', columns: ['attribute_set_id'])]
#[ORM\Index(name: 'CATALOG_PRODUCT_ENTITY_SKU', columns: ['sku'])]
#[ORM\Entity]
class CatalogProductEntity
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'entity_id', type: 'integer', nullable: false, options: ['unsigned' => true, 'comment' => 'Entity Id'])]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $entityId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'attribute_set_id', type: 'smallint', nullable: false, options: ['unsigned' => true, 'comment' => 'Attribute Set ID'])]
    private $attributeSetId = '0';

    /**
     * @var string
     */
    #[ORM\Column(name: 'type_id', type: 'string', length: 32, nullable: false, options: ['default' => 'simple', 'comment' => 'Type ID'])]
    private $typeId = 'simple';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'sku', type: 'string', length: 64, nullable: true, options: ['comment' => 'SKU'])]
    private $sku;

    /**
     * @var int
     */
    #[ORM\Column(name: 'has_options', type: 'smallint', nullable: false, options: ['comment' => 'Has Options'])]
    private $hasOptions = '0';

    /**
     * @var int
     */
    #[ORM\Column(name: 'required_options', type: 'smallint', nullable: false, options: ['unsigned' => true, 'comment' => 'Required Options'])]
    private $requiredOptions = '0';

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'created_at', type: 'datetime', nullable: false, options: ['default' => 'CURRENT_TIMESTAMP', 'comment' => 'Creation Time'])]
    private $createdAt = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'updated_at', type: 'datetime', nullable: false, options: ['default' => 'CURRENT_TIMESTAMP', 'comment' => 'Update Time'])]
    private $updatedAt = 'CURRENT_TIMESTAMP';

    public function getEntityId(): ?int
    {
        return $this->entityId;
    }

    public function getAttributeSetId(): ?int
    {
        return $this->attributeSetId;
    }

    public function setAttributeSetId(int $attributeSetId): self
    {
        $this->attributeSetId = $attributeSetId;

        return $this;
    }

    public function getTypeId(): ?string
    {
        return $this->typeId;
    }

    public function setTypeId(string $typeId): self
    {
        $this->typeId = $typeId;

        return $this;
    }

    public function getSku(): ?string
    {
        return $this->sku;
    }

    public function setSku(?string $sku): self
    {
        $this->sku = $sku;

        return $this;
    }

    public function getHasOptions(): ?int
    {
        return $this->hasOptions;
    }

    public function setHasOptions(int $hasOptions): self
    {
        $this->hasOptions = $hasOptions;

        return $this;
    }

    public function getRequiredOptions(): ?int
    {
        return $this->requiredOptions;
    }

    public function setRequiredOptions(int $requiredOptions): self
    {
        $this->requiredOptions = $requiredOptions;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }


}
