<?php
namespace App\Controller;

use App\Entity\CategoriesDescription;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CategoriesController extends AbstractController
{
    
    #[Route('/{categories_url}.html', name: 'categories', requirements: ['categories_url' => '.+'])]
    #[Entity('categoriesDescription', expr: 'repository.getCategoriesByCategoriesUrl(categories_url)')]
    public function index(CategoriesDescription $categoriesDescription): Response
    {
        return $this->render('categories/nested.html.twig', [
            'categories_id' => $categoriesDescription->getCategoriesId(),
        ]);
    }
}
