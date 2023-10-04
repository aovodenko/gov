<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EavAttributeOptionValue
 */
#[ORM\Table(name: 'eav_attribute_option_value')]
#[ORM\Index(name: 'EAV_ATTRIBUTE_OPTION_VALUE_OPTION_ID', columns: ['option_id'])]
#[ORM\Index(name: 'EAV_ATTRIBUTE_OPTION_VALUE_STORE_ID', columns: ['store_id'])]
#[ORM\Entity]
class EavAttributeOptionValue
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'value_id', type: 'integer', nullable: false, options: ['unsigned' => true, 'comment' => 'Value Id'])]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $valueId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'option_id', type: 'integer', nullable: false, options: ['unsigned' => true, 'comment' => 'Option Id'])]
    private $optionId = '0';

    /**
     * @var int
     */
    #[ORM\Column(name: 'store_id', type: 'smallint', nullable: false, options: ['unsigned' => true, 'comment' => 'Store Id'])]
    private $storeId = '0';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'value', type: 'string', length: 255, nullable: true, options: ['comment' => 'Value'])]
    private $value;

    public function getValueId(): ?int
    {
        return $this->valueId;
    }

    public function getOptionId(): ?int
    {
        return $this->optionId;
    }

    public function setOptionId(int $optionId): self
    {
        $this->optionId = $optionId;

        return $this;
    }

    public function getStoreId(): ?int
    {
        return $this->storeId;
    }

    public function setStoreId(int $storeId): self
    {
        $this->storeId = $storeId;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }


}
