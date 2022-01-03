<?php

namespace App\Controller;

use Doctrine\DBAL\Types\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class RegisterController extends AbstractController
{
    #[Route('/reg', name: 'register')]
    public function reg(): Response
    {
        $regform = $this->createFormBuilder()
        
        ->add('first_name', TextType::class,[
            'label' => 'First name'])
        ->add('last_name', TextType::class,[
            'label' => 'Last name'])
        ->add('email', TextType::class,[
            'label' => 'Email'])
        ->add('username', TextType::class,[
            'label' => 'Username'])
        ->add('country', TextType::class,[
            'label' => 'Country'])
        ->add('city', TextType::class,[
            'label' => 'City'])
        ->add('post_code', TextType::class,[
            'label' => 'Post code'])
        ->add('address_line', TextType::class,[
            'label' => 'Street name and number'])
        ->add('password', RepeatedType::class,[
            'type' => RepeatedType::class,
            'required' => true,
            'first_options' => ['label' => 'Password'],
            'second_options' => ['label' => 'Repeat Password']
        ])

        ->add('register', SubmitType::class)
        ->getForm()
        ;



        return $this->render('register/index.html.twig', [
            'regform' => $regform->createView()
        ]);
    }
}
