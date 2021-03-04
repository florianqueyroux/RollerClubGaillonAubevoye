<?php
namespace App\Controller;

use NeutronStars\Form\Bootstrap\EmailElement;
use NeutronStars\Form\Bootstrap\SubmitElement;
use NeutronStars\Form\Bootstrap\TextAreaElement;
use NeutronStars\Form\Bootstrap\TextElement;
use NeutronStars\Form\Bootstrap\XSRFElement;
use NeutronStars\Form\Form;
use NeutronStars\Neutrino\Core\Controller;

class HomeController extends Controller
{
    public function index(): void
    {
        $this->render('app.home', [
            'flashes' => $this->getFlash()
        ]);
    }

    public function contact(): void
    {
        $form = $this->createFormContact($_POST);

        if ($form->isSubmit() && $form->isValid()) {
            $this->createEmail()
                 ->add($form->get('email'), $form->get('name'))
                 ->send($form->get('subject'), 'mail.contact', [
                     'name'    => $form->get('name'),
                     'message' => $form->get('message')
                 ]);
            $this->addFlash('success', 'Votre message à bien été envoyé.');
            $this->redirect('home');
        }

        $this->render('app.contact', [
            'form'    => $form
        ]);
    }

    private function createFormContact(array $values = []): Form
    {
        return ($this->createForm($values, '', 'POST', new XSRFElement()))
            ->add(new TextElement('Nom *', 'name', 'name', [
                'min' => 3,
                'max' => 32
            ], 'Entrez votre nom'))
            ->add(new EmailElement('Email *', 'email', 'email', [], 'Entrez votre email'))
            ->add(new TextElement('Sujet *', 'subject', 'subject', [
                'min' => 3,
                'max' => 32
            ], 'Quel est le sujet de votre message ?'))
            ->add(new TextAreaElement('Message *', 'message', 'message', [
                'min' => 10
            ], 'Tapez votre message...'))
            ->add(new SubmitElement('Envoyer le message'));
    }
}
