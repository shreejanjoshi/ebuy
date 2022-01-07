<?php

namespace App\Controller;

use App\Entity\Order;
use App\Entity\Product;
use App\Repository\OrderRepository;
use App\Repository\ProductRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrderController extends AbstractController
{
    #[Route('/order', name: 'order')]
    public function index(OrderRepository $orderRepository,ProductRepository $productRepository): Response
    {
        $order = $orderRepository->findAll();
        $product = $productRepository->findAll();
        return $this->render('order/index.html.twig', [
            'order' => $order,
            'product' => $product,
        ]);
    }
    #[Route('/toOrder/{id}', name: 'toOrder')]
    public function order(ManagerRegistry $doctrine){
        $order = new Order();
        $product = new Product();
        $order->setProduct($product->getName());
        $order->setProductPrice($product->getPrice());
        $order->setQuantity($product->getQuantity());
        
        // entity manager
    $em = $doctrine()->getManager();
    //store data
    $em->persist($order);
    //send to database
    $em->flush();

    //redirect to product page
    return $this->redirect($this->generateUrl('product'));

    }

    
}
