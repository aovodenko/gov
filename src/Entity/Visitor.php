<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Visitor
 */
#[ORM\Table(name: 'visitor')]
#[ORM\Entity]
class Visitor
{
    /**
     * @var string
     */
    #[ORM\Column(name: 'email', type: 'string', length: 255, nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $email;

    public function getEmail(): ?string
    {
        return $this->email;
    }


}
