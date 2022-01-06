<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'contact')]

    public function contact(Request $request, MailerInterface $mailer)
    {

        $form = $this->createForm(ContactType::class);

        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {

            $contactFormData = $form->getData();

            $email = (new Email())
                ->from($contactFormData['email'])
                ->to('test@mail.com')
                ->subject($contactFormData['subject'])
                ->text($contactFormData['message']);
            $mailer->send($email);

            $this->addFlash('success', 'Thank you for your feedback!');
            return $this->redirectToRoute('contact');
    }

        return $this->render('contact/contact.html.twig', [
            'our_form' => $form->createView()
        ]);
    }

}
