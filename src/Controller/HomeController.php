<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{

    #[Route('/', name: 'home')]
    public function index(Request $request): Response
    {
/*
        $this->addFlash(
            'top_warning',
            'Your changes were saved!'
        );
*/
//var_dump($_SESSION); die;
        $number = random_int(0, 100);

        return $this->render('home/index.html.twig', [
            'number' => $number,
        ]);
    }
}
