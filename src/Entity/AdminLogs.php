<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdminLogs
 */
#[ORM\Table(name: 'admin_logs')]
#[ORM\Entity]
class AdminLogs
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'log_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $logId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'admin_id', type: 'integer', nullable: false)]
    private $adminId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'admin_email_address', type: 'string', length: 256, nullable: false)]
    private $adminEmailAddress;

    /**
     * @var string
     */
    #[ORM\Column(name: 'table_name', type: 'string', length: 256, nullable: false)]
    private $tableName;

    /**
     * @var string
     */
    #[ORM\Column(name: 'field_name', type: 'string', length: 256, nullable: false)]
    private $fieldName;

    /**
     * @var int
     */
    #[ORM\Column(name: 'field_id', type: 'integer', nullable: false)]
    private $fieldId;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'language_id', type: 'integer', nullable: true, options: ['default' => 1])]
    private $languageId = 1;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'field_before', type: 'text', length: 65535, nullable: true)]
    private $fieldBefore;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'field_after', type: 'text', length: 65535, nullable: true)]
    private $fieldAfter;

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'date_added', type: 'datetime', nullable: false)]
    private $dateAdded;

    public function getLogId(): ?int
    {
        return $this->logId;
    }

    public function getAdminId(): ?int
    {
        return $this->adminId;
    }

    public function setAdminId(int $adminId): self
    {
        $this->adminId = $adminId;

        return $this;
    }

    public function getAdminEmailAddress(): ?string
    {
        return $this->adminEmailAddress;
    }

    public function setAdminEmailAddress(string $adminEmailAddress): self
    {
        $this->adminEmailAddress = $adminEmailAddress;

        return $this;
    }

    public function getTableName(): ?string
    {
        return $this->tableName;
    }

    public function setTableName(string $tableName): self
    {
        $this->tableName = $tableName;

        return $this;
    }

    public function getFieldName(): ?string
    {
        return $this->fieldName;
    }

    public function setFieldName(string $fieldName): self
    {
        $this->fieldName = $fieldName;

        return $this;
    }

    public function getFieldId(): ?int
    {
        return $this->fieldId;
    }

    public function setFieldId(int $fieldId): self
    {
        $this->fieldId = $fieldId;

        return $this;
    }

    public function getLanguageId(): ?int
    {
        return $this->languageId;
    }

    public function setLanguageId(?int $languageId): self
    {
        $this->languageId = $languageId;

        return $this;
    }

    public function getFieldBefore(): ?string
    {
        return $this->fieldBefore;
    }

    public function setFieldBefore(?string $fieldBefore): self
    {
        $this->fieldBefore = $fieldBefore;

        return $this;
    }

    public function getFieldAfter(): ?string
    {
        return $this->fieldAfter;
    }

    public function setFieldAfter(?string $fieldAfter): self
    {
        $this->fieldAfter = $fieldAfter;

        return $this;
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


}
