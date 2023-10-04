<?php

namespace App\Repository;

use App\Entity\SlidersImages;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SlidersImages>
 *
 * @method SlidersImages|null find($id, $lockMode = null, $lockVersion = null)
 * @method SlidersImages|null findOneBy(array $criteria, array $orderBy = null)
 * @method SlidersImages[]    findAll()
 * @method SlidersImages[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SlidersImagesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SlidersImages::class);
    }

    public function save(SlidersImages $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(SlidersImages $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return SlidersImages[] Returns an array of SlidersImages objects
//     */
    public function findBySlidersId($value): array
    {
        $qb = $this->createQueryBuilder('s');
        
        return $qb
            ->andWhere('s.slidersId = :val')
            ->andWhere('s.slidersImagesStatus = 1')
            ->andWhere($qb->expr()->orX(
                $qb->expr()->isNull('s.dateStart'), 
                $qb->expr()->lte('s.dateStart', 'now()')
            ))
            ->andWhere($qb->expr()->orX(
                $qb->expr()->isNull('s.dateEnd'), 
                $qb->expr()->gte('s.dateEnd', 'now()')
            ))                
            ->setParameter('val', $value)
            ->orderBy('s.sortOrder', 'ASC')
            ->getQuery()
            ->setMaxResults(1)
            ->useResultCache(true, 86400)
            ->getResult()
        ;
    }

//    public function findOneBySomeField($value): ?SlidersImages
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
