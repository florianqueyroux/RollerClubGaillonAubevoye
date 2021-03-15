<?php


namespace App\Controller;

use NeutronStars\Form\Form;
use NeutronStars\Neutrino\Core\Controller;
use App\Form\TextElement;
use App\Form\EmailElement;
use App\Form\TextAreaElement;
use App\Form\SubmitElement;

class ContactController extends Controller
{
    public function contact()
    {
        $form = new Form($_POST);
        $form -> add(new TextElement('Nom','nom',NULL,[
            'min'=> 3,
            'max'=> 32
        ],'Nom'));
        $form -> add(new TextElement('Prénom','prenom',NULL,[
            'min'=> 3,
            'max'=> 32
        ],'Prénom'));
        $form -> add(new EmailElement('Email*','email',NULL,[],'email'));
        $form -> add(new TextAreaElement('Message','message',NULL,[
            'min'=> 15
        ]));
        $form -> add(new SubmitElement('Envoyer'));
        if($form->isSubmit() && $form->isValid()){
            $this->createEmail()
                ->add('contact.rcga@gmail.com', 'Roller Club Gaillon Aubevoye')
                ->send('Contact page RCGA','mail.contact',[
                    'nom'    => $form->get('nom'),
                    'prenom' => $form->get('prenom'),
                    'email'  => $form->get('email'),
                    'message'=> $form->get('message')
                ]);
        }
        $this->render('app.contact',[
            'form'=> $form
        ]);
    }
}