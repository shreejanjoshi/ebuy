<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Product;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FooterController extends AbstractController
{


    #[Route('/footer', name: 'category')]
    public function category(ManagerRegistry $doctrine): Response
    {
        
        $repository = $doctrine->getRepository(Category::class);
        $categories = $repository->findAll();
        $count = 0;
        foreach($categories as $category) {
            $items [0] = $category;
            
            var_dump($items[$count]);
        }
        $count++;
        // print_r($items[1]);
        // var_dump($items);

        return $this->render('footer.html.twig', [
            'controller_name' => 'FooterController',
            'categories' => $categories,

        ]);
    }


    // #[Route('/footer', name: 'product')]
    // public function products(ManagerRegistry $doctrine): Response
    // {
    //     $repository = $doctrine->getRepository(Product::class);
    //     $products = $repository->findAll();

    //     return $this->render('footer/index.html.twig', [
    //         'controller_name' => 'FooterController',
    //         'product' => $products,
    //         // var_dump($products)
    //     ]);

      

    // }
}
