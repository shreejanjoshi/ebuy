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
   
   $repository = $doctrine->getRepository(Category::class);
   $categories = $repository->findAll();

   return $this->render('home/index.html.twig', [
       'controller_name' => 'HomeController',
       'categories' => $categories,
   ]);
    }
}
