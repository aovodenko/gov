<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EavAttributeOption
 */
#[ORM\Table(name: 'eav_attribute_option')]
#[ORM\Index(name: 'EAV_ATTRIBUTE_OPTION_ATTRIBUTE_ID', columns: ['attribute_id'])]
#[ORM\Entity]
class EavAttributeOption
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'option_id', type: 'integer', nullable: false, options: ['unsigned' => true, 'comment' => 'Option Id'])]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $optionId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'attribute_id', type: 'smallint', nullable: false, options: ['unsigned' => true, 'comment' => 'Attribute Id'])]
    private $attributeId = '0';

    /**
     * @var int
     */
    #[ORM\Column(name: 'sort_order', type: 'smallint', nullable: false, options: ['unsigned' => true, 'comment' => 'Sort Order'])]
    private $sortOrder = '0';

    public function getOptionId(): ?int
    {
        return $this->optionId;
    }

    public function getAttributeId(): ?int
    {
        return $this->attributeId;
    }

    public function setAttributeId(int $attributeId): self
    {
        $this->attributeId = $attributeId;

        return $this;
    }

    public function getSortOrder(): ?int
    {
        return $this->sortOrder;
    }

    public function setSortOrder(int $sortOrder): self
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }


}
