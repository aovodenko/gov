<?php

namespace App\Repository;

use App\Entity\Sliders;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Sliders>
 *
 * @method Sliders|null find($id, $lockMode = null, $lockVersion = null)
 * @method Sliders|null findOneBy(array $criteria, array $orderBy = null)
 * @method Sliders[]    findAll()
 * @method Sliders[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SlidersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Sliders::class);
    }

    public function save(Sliders $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Sliders $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Sliders[] Returns an array of Sliders objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

    public function findOneBySlidersAlias($value): ?Sliders
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.slidersAlias = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->useResultCache(true, 86400)
            ->getOneOrNullResult()
        ;
    }
}
