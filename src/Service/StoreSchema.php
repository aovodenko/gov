<?php
namespace App\Service;

use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Reviews;

class StoreSchema
{
    protected $entityManager;

    public function __construct(ManagerRegistry $doctrine) {
        $this->entityManager = $doctrine->getManager();
    }

    public function generate(): array
    {
        $reviews = $this->entityManager->getRepository(Reviews::class)->createQueryBuilder('r')
          ->select("COUNT(r.reviewsId) AS approved_count, ROUND(AVG(r.reviewsRating), 2) AS reviews_rating_avg")
          ->where('r.approved = 1')
          ->getQuery()
          ->getOneOrNullResult()
        ;

        return $reviews;
    }
}
