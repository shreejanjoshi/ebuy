<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Category;
use App\Repository\CategoryRepository;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(ManagerRegistry $doctrine): Response
    {
//    $category = new Category('Rakneswaran', 'bCodeStudent', 'becode.png', 'DC');
   
   $repository = $doctrine->getRepository(Category::class);
   $categories = $repository->findAll();
   

   // return new Response('This is the product with id ' . $product->getId() . ' and name ' . $product->getName());
   return $this->render('home/index.html.twig', [
       'controller_name' => 'HomeController',
       'categories' => $categories,

       
   ]);

   return $this->render('products/index.html.twig', [
    'controller_name' => 'HomeController',
    'categories' => $categories,

    
    ]);

   

    }

    
}
