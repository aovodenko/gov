<?php
namespace App\Repository;

use App\Entity\Categories;
use App\Entity\CategoriesDescription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class CategoriesRepository extends ServiceEntityRepository
{

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Categories::class);
    }
    
    public function getParentCategory(int $parent_id = 0)
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery('
            SELECT 
                c, cd
            FROM 
                App\Entity\Categories c JOIN c.categoriesDescription cd
            WHERE 
                    c.parentId = :parentId 
                AND c.categoriesStatus = 1 
                AND c.categoriesHidden = 1 
                AND cd.categoriesName <> :categoriesName 
                AND cd.languageId = :languageId 
            ORDER BY 
                c.sortOrder ASC, 
                cd.categoriesName ASC
        ')
        ->setParameter('parentId', $parent_id)
        ->setParameter('languageId', 1)
        ->setParameter('categoriesName', 'Gift Certificates')
        ;      

        return $query->getResult();
    }

}
