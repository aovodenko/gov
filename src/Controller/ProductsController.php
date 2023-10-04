<?php
namespace App\Controller;

use App\Entity\Products;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductsController extends AbstractController
{
    
    #[Route('/{products_url}-p-{products_id}.html', name: 'products', priority: 10, requirements: ['products_url' => '.+'])]
    #[Entity('products', expr: 'repository.find(products_id)')]
    public function index(Products $products): Response
    {
        return $this->render('products/index.html.twig', [
            'products_id' => $products->getProductsId(),
        ]);
    }
}
