<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SearchQueriesSorted
 */
#[ORM\Table(name: 'search_queries_sorted')]
#[ORM\Entity]
class SearchQueriesSorted
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'search_id', type: 'smallint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private $searchId;

    /**
     * @var string
     */
    #[ORM\Column(name: 'search_text', type: 'text', length: 255, nullable: false)]
    private $searchText;

    /**
     * @var int
     */
    #[ORM\Column(name: 'search_count', type: 'integer', nullable: false)]
    private $searchCount = '0';

    public function getSearchId(): ?int
    {
        return $this->searchId;
    }

    public function getSearchText(): ?string
    {
        return $this->searchText;
    }

    public function setSearchText(string $searchText): self
    {
        $this->searchText = $searchText;

        return $this;
    }

    public function getSearchCount(): ?int
    {
        return $this->searchCount;
    }

    public function setSearchCount(int $searchCount): self
    {
        $this->searchCount = $searchCount;

        return $this;
    }


}
