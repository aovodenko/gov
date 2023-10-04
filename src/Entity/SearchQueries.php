<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SearchQueries
 */
#[ORM\Table(name: 'search_queries')]
#[ORM\Entity]
class SearchQueries
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'search_id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $searchId;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'search_text', type: 'text', length: 255, nullable: true)]
    private $searchText;

    public function getSearchId(): ?int
    {
        return $this->searchId;
    }

    public function getSearchText(): ?string
    {
        return $this->searchText;
    }

    public function setSearchText(?string $searchText): self
    {
        $this->searchText = $searchText;

        return $this;
    }


}
