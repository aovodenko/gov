<?php

namespace App\Repository;

use App\Entity\AppEntitySliders;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AppEntitySliders>
 *
 * @method AppEntitySliders|null find($id, $lockMode = null, $lockVersion = null)
 * @method AppEntitySliders|null findOneBy(array $criteria, array $orderBy = null)
 * @method AppEntitySliders[]    findAll()
 * @method AppEntitySliders[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AppEntitySlidersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AppEntitySliders::class);
    }

    public function save(AppEntitySliders $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(AppEntitySliders $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return AppEntitySliders[] Returns an array of AppEntitySliders objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?AppEntitySliders
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
