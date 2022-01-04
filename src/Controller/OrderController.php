<?php

namespace App\Controller;

use App\Entity\Order;
use App\Entity\Product;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrderController extends AbstractController
{
    #[Route('/order', name: 'order')]
    public function index(): Response
    {
        $order = new Order();
        $order->setProduct("grape");
        $order->setTotalPrice(15);

        // entity manager
    $em = $this->getDoctrine()->getManager();
    $em->persist($order);
    $em->flush();
        return $this->render('order/index.html.twig', [
            'order' => '$order',
        ]);
    }
    public function order(Product $product){
        $order = new Order();
        $order->setProduct($product->getName());
        $order->setTotalPrice($product->getPrice());

        // entity manager
    $em = $this->getDoctrine()->getManager();
    $em->persist($order);
    $em->flush();

    }

    
}
