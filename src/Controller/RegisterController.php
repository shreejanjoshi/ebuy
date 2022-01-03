<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Console\Input\Input;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;


class RegisterController extends AbstractController
{
    #[Route('/reg', name: 'register')]
    public function reg(ManagerRegistry $doctrine, Request $request, UserPasswordHasherInterface $passHasher): Response
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
            'type' => PasswordType::class,
            'required' => true,
            'first_options' => ['label' => 'Password'],
            'second_options' => ['label' => 'Repeat Password']
        ])

        ->add('register', SubmitType::class)
        ->getForm()
        ;

        // process request
        $regform->handleRequest($request);

        if($regform->isSubmitted()){
            // get data
            $input = $regform->getData();
            // save data to database
            $user = new User();

            $user->setFirstName($input['first_name']);
            $user->setLastName($input['last_name']);
            $user->setEmail($input['email']);
            $user->setUsername($input['username']);
            $user->setCountry($input['country']);
            $user->setCity($input['city']);
            $user->setPostCode($input['post_code']);
            $user->setAddressLine($input['address_line']);

            $user->setPassword(
                $passHasher ->hashPassword($user, $input['password'])
            );

            //entity manager
            $em = $doctrine->getManager();
            // stor user
            $em->persist($user);
            // sendit
            $em->flush();

            return $this->redirect($this->generateUrl('home'));
        }

        return $this->render('register/index.html.twig', [
            'regform' => $regform->createView()
        ]);
    }
}
