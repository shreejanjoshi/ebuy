<?php

namespace App\Controller;

use App\Entity\Order;
use Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrderController extends AbstractController
{
    #[Route('/order', name: 'order')]
    public function index(): Response
    {
        return $this->render('order/index.html.twig', [
            'controller_name' => 'OrderController',
        ]);
    }
    public function order(Product $product){
        $order = new Order();
        $order->setProduct($product->getName());

        // entity manager
    $em = $this->getDoctrine()->getManager();
    $em->persist($order);
    $em->flush();

    }

    
}
