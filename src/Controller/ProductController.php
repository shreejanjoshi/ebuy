<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\Category;
use App\Entity\User;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use App\Repository\CategoryRepository;
use App\Repository\UserRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;

class ProductController extends AbstractController
{
    // route from homepage based on Category name
    // still wip because the seller details aren't there (yet, hopefully?)
    #[Route('/category/{name}', name: 'category-name')]
    public function showCategoryByName(string $name, CategoryRepository $categoryRepository, ProductRepository $productRepository, ManagerRegistry $doctrine): Response
    {
        $categoryRepository = $doctrine->getRepository(Category::class);
        $category = $categoryRepository->findOneBy(['name' => $name]);

        $categoryId = $category->getId();

        $products = $productRepository->getAllProductsByCategoryId($categoryId);
        // $productRepository = $doctrine->getRepository(Product::class)->getAllProductsByCategoryId($catId);

        return $this->render('home/category.html.twig', [
            'controller_name' => 'HomeController',
            'category' => $category,
            'products' => $products,
        ]);

               
    }
    


    // route that will get all products from DB
    #[Route('/products', name: 'products')]
    public function showAll(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Product::class);
        $products = $repository->findAll();

        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
            'products' => $products,
        ]);

       
    }


    // route for a specific product from DB based on it's ID
    #[Route('/product/{id}', name: 'product-by-id')]
    public function showById(int $id, ProductRepository $productRepository): Response
    {
        $product = $productRepository
            ->find($id);

        return $this->render('product/detail.html.twig', [
            'controller_name' => 'ProductController',
            'product' => $product
        ]);
    }


    // wip add product route. atm it's kinda hard(core) coded but it does work and it does add to DB.
    // all the variables values should come from somewhere, like a form or something.
    // if we can manage to get that to work, then we're gucci

    #[Route('/add-product', name: 'add-product')]
    public function addProduct(ManagerRegistry $doctrine, CategoryRepository $categoryRepository, UserRepository $userRepository): Response
    {

        $categoryRepository = new CategoryRepository($doctrine);
        $categoryObject = $categoryRepository->find(1);

        $userRepository = new UserRepository($doctrine);
        $userObject = $userRepository->find(1);

        $product = new Product();
        $product->setName('another stupid name');
        $product->setCategory($categoryObject);
        $product->setPrice(12);
        $product->setQuantity(1);
        $product->setDescription('fresh, tasty duck, slightly flambe for extra taste');
        $product->setImage('duck image');
        $product->setSeller($userObject);
        $product->setDate('2022-01-06');
        $product->setState('new');

        $entityManager = $doctrine->getManager();
        $entityManager->persist($product);
        $entityManager->flush();

        return new Response('Saved new product with id ' . $product->getId());
    }

    #[Route('/create', name: 'createproduct')]
    public function createProduct (ManagerRegistry $doctrine, Request $request){
        $product = new Product();
        $form =$this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if($form->isSubmitted()){
            $em = $doctrine->getManager();
            $image = $request->files->get('product')['attachment'];

            if($image){
                $filename = md5(uniqid()). '.'. $image->guessClientExtension();
            }

            $image->move(
                $this->getParameter('image_folder'),
                $filename
            );
            $product->setImage($filename);
            $em->persist($product);
            $em->flush();

            return $this->redirect($this->generateUrl('home'));
        }


        return $this->render('product/create.html.twig', [
            'productCreateForm' => $form->createView()
        ]);
    }
}
