<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VisualVerifyCode
 */
#[ORM\Table(name: 'visual_verify_code')]
#[ORM\Entity]
class VisualVerifyCode
{
    /**
     * @var string
     */
    #[ORM\Column(name: 'oscsid', type: 'string', length: 32, nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $oscsid;

    /**
     * @var string
     */
    #[ORM\Column(name: 'code', type: 'string', length: 6, nullable: false)]
    private $code;

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'dt', type: 'datetime', nullable: false, options: ['default' => 'CURRENT_TIMESTAMP'])]
    private $dt = 'CURRENT_TIMESTAMP';

    public function getOscsid(): ?string
    {
        return $this->oscsid;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getDt(): ?\DateTimeInterface
    {
        return $this->dt;
    }

    public function setDt(\DateTimeInterface $dt): self
    {
        $this->dt = $dt;

        return $this;
    }


}
