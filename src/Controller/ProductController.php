<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\Category;
use App\Entity\User;
use App\Repository\ProductRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    // #[Route('/product', name: 'product')]
    // public function index(): Response
    // {
    //     return $this->render('product/index.html.twig', [
    //         'controller_name' => 'ProductController',
    //     ]);
    // }

    #[Route('/product', name: 'product')]
    public function showAll(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Product::class);
        $products = $repository->findAll();

        // return new Response('This is the product with id ' . $product->getId() . ' and name ' . $product->getName());
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
            'products' => $products,
        ]);
    }

    // this is not working atm because Category and Seller are Class type, not int. 
    // public function addProduct(ManagerRegistry $doctrine): Response
    // {

    //     $category = new Category();
    //     $category->setName('Cat Food');

    //     $user = new User();
    //     $user->setUsername('Gru101');

    //     // $product = new Product(
    //     //     'salmon file',
    //     //     1,
    //     //     3,
    //     //     1,
    //     //     'wild salmon file, caught by bear paw from nordic pure water rivers',
    //     //     'no image',
    //     //     1,
    //     //     '2022-01-01',
    //     //     'new'
    //     // );

    //     $product = new Product();
    //     $product->setName('salmon file');
    //     $product->setCategory($category);
    //     $product->setPrice(3);
    //     $product->setQuantity(1);
    //     $product->setDescription('wild salmon file, caught by bear paw from nordic pure water rivers');
    //     $product->setImage('no image');
    //     $product->setSeller(1);
    //     $product->setDate('2022-01-01');
    //     $product->setState('new');

    //     $entityManager = $doctrine->getManager();

    //     $entityManager->persist($category);
    //     $entityManager->persist($user);
    //     $entityManager->persist($product);
    //     $entityManager->flush();

    //     return new Response('Saved new product with id ' . $product->getId());
    // }

    /**
     * @Route("/product/{id}", name="product_show")
     */
    public function showById(int $id, ProductRepository $productRepository): Response
    {
        $product = $productRepository
            ->find($id);

        // return new Response('This is the product with id ' . $product->getId() . ' and name ' . $product->getName());
        return $this->render('product/detail.html.twig', [
            'controller_name' => 'ProductController',
            'product' => $product
        ]);
    }
}
