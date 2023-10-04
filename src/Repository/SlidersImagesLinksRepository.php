<?php

namespace App\Repository;

use App\Entity\SlidersImagesLinks;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SlidersImagesLinks>
 *
 * @method SlidersImagesLinks|null find($id, $lockMode = null, $lockVersion = null)
 * @method SlidersImagesLinks|null findOneBy(array $criteria, array $orderBy = null)
 * @method SlidersImagesLinks[]    findAll()
 * @method SlidersImagesLinks[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SlidersImagesLinksRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SlidersImagesLinks::class);
    }

    public function save(SlidersImagesLinks $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(SlidersImagesLinks $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return SlidersImagesLinks[] Returns an array of SlidersImagesLinks objects
//     */
    public function findBySlidersImagesId($value): array
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.slidersImagesId = :val')
            ->setParameter('val', $value)
            ->orderBy('s.slidersImagesLinksId', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->useResultCache(true, 86400)
            ->getResult()
        ;
    }

//    public function findOneBySomeField($value): ?SlidersImagesLinks
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
