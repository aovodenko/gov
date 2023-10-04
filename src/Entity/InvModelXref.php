<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvModelXref
 */
#[ORM\Table(name: 'inv_model_xref')]
#[ORM\Entity]
class InvModelXref
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $id;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'gov_model', type: 'string', length: 20, nullable: true)]
    private $govModel;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'xref_model', type: 'string', length: 20, nullable: true)]
    private $xrefModel;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGovModel(): ?string
    {
        return $this->govModel;
    }

    public function setGovModel(?string $govModel): self
    {
        $this->govModel = $govModel;

        return $this;
    }

    public function getXrefModel(): ?string
    {
        return $this->xrefModel;
    }

    public function setXrefModel(?string $xrefModel): self
    {
        $this->xrefModel = $xrefModel;

        return $this;
    }


}
