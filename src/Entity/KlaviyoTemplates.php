<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KlaviyoTemplates
 */
#[ORM\Table(name: 'klaviyo_templates')]
#[ORM\Entity]
class KlaviyoTemplates
{
    /**
     * @var string
     */
    #[ORM\Column(name: 'id', type: 'string', length: 6, nullable: false, options: ['fixed' => true])]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $id;

    /**
     * @var string
     */
    #[ORM\Column(name: 'title', type: 'string', length: 255, nullable: false)]
    private $title;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }


}
