<?php

namespace App\Repository;

use App\Entity\Products;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Products>
 *
 * @method Products|null find($id, $lockMode = null, $lockVersion = null)
 * @method Products|null findOneBy(array $criteria, array $orderBy = null)
 * @method Products[]    findAll()
 * @method Products[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Products::class);
    }

    public function save(Products $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Products $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * @return Products[] Returns an array of Products objects
     */
    public function findTopSellers(): array
    {
        $qb = $this->createQueryBuilder('p');
        
        return 
            $qb->select([
                'p.productsId', 
                'p.productsImage', 
                'p.productsQuantity', 
                'p.productsTaxClassId',
                'p.productsPrice'
            ])
            ->innerJoin('p.productsDescription', 'pd', 'WITH', 'p.productsStatus = 1 AND pd.languageId = 1')
            ->addSelect('pd.productsName')
            ->innerJoin('p.productsRecommend', 'pr', 'WITH', 'pr.categoriesId = 0')
            ->leftJoin('p.specials', 's', 'WITH', 'pr.categoriesId = 0')
            ->addSelect("ifelse(" . $qb->expr()->andX(
                's.status = 1', 
                $qb->expr()->orX(
                    $qb->expr()->isNull('s.specialsDateStarted'), 
                    $qb->expr()->lte('s.specialsDateStarted', 'now()')
                ),
                $qb->expr()->orX(
                    $qb->expr()->isNull('s.expiresDate'), 
                    $qb->expr()->gte('s.expiresDate', 'now()')
                ),                    
            ) . ", s.specialsNewProductsPrice, null) as specialsNewProductsPrice")
            ->addSelect("ifelse(" . $qb->expr()->andX(
                's.status = 1', 
                $qb->expr()->orX(
                    $qb->expr()->isNull('s.specialsDateStarted'), 
                    $qb->expr()->lte('s.specialsDateStarted', 'now()')
                ),
                $qb->expr()->orX(
                    $qb->expr()->isNull('s.expiresDate'), 
                    $qb->expr()->gte('s.expiresDate', 'now()')
                ),                    
            ) . ", s.specialsNewProductsPrice, p.productsPrice) as finalPrice")                
            ->leftJoin('p.reviews', 'r', 'WITH', 'r.approved = 1')
            ->addSelect('avg(r.reviewsRating) as reviewsRatingAvg')
            ->addSelect('count(r.reviewsRating) as reviewsRatingCount')
            ->groupBy('p.productsId')    
            ->orderBy('pr.sortOrder', 'ASC')
            ->setMaxResults(15)
            ->getQuery()
            ->useResultCache(true, 86400)
            ->getResult()
        ;
    }
    
    /**
     * @return Products[] Returns an array of Products objects
     */
    public function findNewArrivals(): array
    {
        $qb = $this->createQueryBuilder('p');
        
        return 
            $qb->select([
                'p.productsId', 
                'p.productsImage', 
                'p.productsQuantity', 
                'p.productsTaxClassId',
                'p.productsPrice'
            ])
            ->innerJoin('p.productsDescription', 'pd', 'WITH', 'p.productsStatus = 1 AND pd.languageId = 1')
            ->addSelect('pd.productsName')
            ->leftJoin('p.specials', 's')
            ->addSelect("ifelse(" . $qb->expr()->andX(
                's.status = 1', 
                $qb->expr()->orX(
                    $qb->expr()->isNull('s.specialsDateStarted'), 
                    $qb->expr()->lte('s.specialsDateStarted', 'now()')
                ),
                $qb->expr()->orX(
                    $qb->expr()->isNull('s.expiresDate'), 
                    $qb->expr()->gte('s.expiresDate', 'now()')
                ),                    
            ) . ", s.specialsNewProductsPrice, null) as specialsNewProductsPrice")
            ->addSelect("ifelse(" . $qb->expr()->andX(
                's.status = 1', 
                $qb->expr()->orX(
                    $qb->expr()->isNull('s.specialsDateStarted'), 
                    $qb->expr()->lte('s.specialsDateStarted', 'now()')
                ),
                $qb->expr()->orX(
                    $qb->expr()->isNull('s.expiresDate'), 
                    $qb->expr()->gte('s.expiresDate', 'now()')
                ),                    
            ) . ", s.specialsNewProductsPrice, p.productsPrice) as finalPrice")                
            ->leftJoin('p.reviews', 'r', 'WITH', 'r.approved = 1')
            ->addSelect('avg(r.reviewsRating) as reviewsRatingAvg')
            ->addSelect('count(r.reviewsRating) as reviewsRatingCount')
            ->groupBy('p.productsId')    
            ->orderBy('p.productsDateAdded', 'DESC')
            ->addOrderBy('pd.productsName', 'ASC')
            ->setMaxResults(15)
            ->getQuery()
            ->useResultCache(true, 86400)
            ->getResult()
        ;
    }    

    public function findOneByProductsUPC($value): ?Sliders
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.upc = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->useResultCache(true, 86400)
            ->getOneOrNullResult()
        ;
    }
}
