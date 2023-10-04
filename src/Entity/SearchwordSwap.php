<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SearchwordSwap
 */
#[ORM\Table(name: 'searchword_swap')]
#[ORM\Entity]
class SearchwordSwap
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'sws_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $swsId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'sws_word', type: 'string', length: 100, nullable: false)]
    private $swsWord = '';

    /**
     * @var string
     */
    #[ORM\Column(name: 'sws_replacement', type: 'string', length: 100, nullable: false)]
    private $swsReplacement = '';

    public function getSwsId(): ?int
    {
        return $this->swsId;
    }

    public function getSwsWord(): ?string
    {
        return $this->swsWord;
    }

    public function setSwsWord(string $swsWord): self
    {
        $this->swsWord = $swsWord;

        return $this;
    }

    public function getSwsReplacement(): ?string
    {
        return $this->swsReplacement;
    }

    public function setSwsReplacement(string $swsReplacement): self
    {
        $this->swsReplacement = $swsReplacement;

        return $this;
    }


}
