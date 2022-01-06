<?php

namespace App\Controller;

use App\Entity\Order;
use App\Repository\OrderRepository;
use Doctrine\Persistence\ManagerRegistry;
use Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrderController extends AbstractController
{
    #[Route('/order', name: 'order')]
    public function index(OrderRepository $orderRepository): Response
    {
        $order = $orderRepository->findAll();
        return $this->render('order/index.html.twig', [
            'order' => $order,
        ]);
    }
    
    public function order(Product $product,ManagerRegistry $doctrine){
        $order = new Order();
        $order->setProduct("shirt");
        $order->setQuantity(20);
        $order->setTotalPrice(200);

        // entity manager
    $em = $doctrine()->getManager();
    $em->persist($order);
    $em->flush();

    }

    
}
