<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EavAttribute
 */
#[ORM\Table(name: 'eav_attribute')]
#[ORM\UniqueConstraint(name: 'EAV_ATTRIBUTE_ENTITY_TYPE_ID_ATTRIBUTE_CODE', columns: ['entity_type_id', 'attribute_code'])]
#[ORM\Entity]
class EavAttribute
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'attribute_id', type: 'smallint', nullable: false, options: ['unsigned' => true, 'comment' => 'Attribute Id'])]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $attributeId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'entity_type_id', type: 'smallint', nullable: false, options: ['unsigned' => true, 'comment' => 'Entity Type Id'])]
    private $entityTypeId = '0';

    /**
     * @var string
     */
    #[ORM\Column(name: 'attribute_code', type: 'string', length: 255, nullable: false, options: ['comment' => 'Attribute Code'])]
    private $attributeCode;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'attribute_model', type: 'string', length: 255, nullable: true, options: ['comment' => 'Attribute Model'])]
    private $attributeModel;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'backend_model', type: 'string', length: 255, nullable: true, options: ['comment' => 'Backend Model'])]
    private $backendModel;

    /**
     * @var string
     */
    #[ORM\Column(name: 'backend_type', type: 'string', length: 8, nullable: false, options: ['default' => 'static', 'comment' => 'Backend Type'])]
    private $backendType = 'static';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'backend_table', type: 'string', length: 255, nullable: true, options: ['comment' => 'Backend Table'])]
    private $backendTable;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'frontend_model', type: 'string', length: 255, nullable: true, options: ['comment' => 'Frontend Model'])]
    private $frontendModel;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'frontend_input', type: 'string', length: 50, nullable: true, options: ['comment' => 'Frontend Input'])]
    private $frontendInput;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'frontend_label', type: 'string', length: 255, nullable: true, options: ['comment' => 'Frontend Label'])]
    private $frontendLabel;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'frontend_class', type: 'string', length: 255, nullable: true, options: ['comment' => 'Frontend Class'])]
    private $frontendClass;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'source_model', type: 'string', length: 255, nullable: true, options: ['comment' => 'Source Model'])]
    private $sourceModel;

    /**
     * @var int
     */
    #[ORM\Column(name: 'is_required', type: 'smallint', nullable: false, options: ['unsigned' => true, 'comment' => 'Defines Is Required'])]
    private $isRequired = '0';

    /**
     * @var int
     */
    #[ORM\Column(name: 'is_user_defined', type: 'smallint', nullable: false, options: ['unsigned' => true, 'comment' => 'Defines Is User Defined'])]
    private $isUserDefined = '0';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'default_value', type: 'text', length: 65535, nullable: true, options: ['comment' => 'Default Value'])]
    private $defaultValue;

    /**
     * @var int
     */
    #[ORM\Column(name: 'is_unique', type: 'smallint', nullable: false, options: ['unsigned' => true, 'comment' => 'Defines Is Unique'])]
    private $isUnique = '0';

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'note', type: 'string', length: 255, nullable: true, options: ['comment' => 'Note'])]
    private $note;

    public function getAttributeId(): ?int
    {
        return $this->attributeId;
    }

    public function getEntityTypeId(): ?int
    {
        return $this->entityTypeId;
    }

    public function setEntityTypeId(int $entityTypeId): self
    {
        $this->entityTypeId = $entityTypeId;

        return $this;
    }

    public function getAttributeCode(): ?string
    {
        return $this->attributeCode;
    }

    public function setAttributeCode(string $attributeCode): self
    {
        $this->attributeCode = $attributeCode;

        return $this;
    }

    public function getAttributeModel(): ?string
    {
        return $this->attributeModel;
    }

    public function setAttributeModel(?string $attributeModel): self
    {
        $this->attributeModel = $attributeModel;

        return $this;
    }

    public function getBackendModel(): ?string
    {
        return $this->backendModel;
    }

    public function setBackendModel(?string $backendModel): self
    {
        $this->backendModel = $backendModel;

        return $this;
    }

    public function getBackendType(): ?string
    {
        return $this->backendType;
    }

    public function setBackendType(string $backendType): self
    {
        $this->backendType = $backendType;

        return $this;
    }

    public function getBackendTable(): ?string
    {
        return $this->backendTable;
    }

    public function setBackendTable(?string $backendTable): self
    {
        $this->backendTable = $backendTable;

        return $this;
    }

    public function getFrontendModel(): ?string
    {
        return $this->frontendModel;
    }

    public function setFrontendModel(?string $frontendModel): self
    {
        $this->frontendModel = $frontendModel;

        return $this;
    }

    public function getFrontendInput(): ?string
    {
        return $this->frontendInput;
    }

    public function setFrontendInput(?string $frontendInput): self
    {
        $this->frontendInput = $frontendInput;

        return $this;
    }

    public function getFrontendLabel(): ?string
    {
        return $this->frontendLabel;
    }

    public function setFrontendLabel(?string $frontendLabel): self
    {
        $this->frontendLabel = $frontendLabel;

        return $this;
    }

    public function getFrontendClass(): ?string
    {
        return $this->frontendClass;
    }

    public function setFrontendClass(?string $frontendClass): self
    {
        $this->frontendClass = $frontendClass;

        return $this;
    }

    public function getSourceModel(): ?string
    {
        return $this->sourceModel;
    }

    public function setSourceModel(?string $sourceModel): self
    {
        $this->sourceModel = $sourceModel;

        return $this;
    }

    public function getIsRequired(): ?int
    {
        return $this->isRequired;
    }

    public function setIsRequired(int $isRequired): self
    {
        $this->isRequired = $isRequired;

        return $this;
    }

    public function getIsUserDefined(): ?int
    {
        return $this->isUserDefined;
    }

    public function setIsUserDefined(int $isUserDefined): self
    {
        $this->isUserDefined = $isUserDefined;

        return $this;
    }

    public function getDefaultValue(): ?string
    {
        return $this->defaultValue;
    }

    public function setDefaultValue(?string $defaultValue): self
    {
        $this->defaultValue = $defaultValue;

        return $this;
    }

    public function getIsUnique(): ?int
    {
        return $this->isUnique;
    }

    public function setIsUnique(int $isUnique): self
    {
        $this->isUnique = $isUnique;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }


}
