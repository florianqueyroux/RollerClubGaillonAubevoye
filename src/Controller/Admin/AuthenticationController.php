<?php


namespace App\Controller\Admin;


use App\Form\EmailElement;
use App\Form\SubmitElement;
use App\Form\TextElement;
use App\Model\UsersModel;
use NeutronStars\Form\Form;

class AuthenticationController extends AdminController
{
    public function __construct()
    {
        parent::__construct(false);
    }

    public function login()
    {
        $form = new Form($_POST);
        $form -> add(new EmailElement('Email','email',NULL,[]));
        $form -> add((new TextElement('Password','password',NULL,[
            'min'=> 6,
            'max'=> 32
        ]))->setType('password'));
        $form -> add(new SubmitElement('Se connecter'));
        if($form->isSubmit() && $form->isValid()){
            $user = (new UsersModel())->getUserByEmail($form->get('email'));
            if($user !== NULL && password_verify($form->get('password'), $user->getPassword())){
                $this->connect($user);
                $this->redirect('admin');
            }
            $error = 'Identifiant invalide';
        }
        $this -> render('admin.login',[
            'form'=>$form,
            'error'=>$error??NULL
        ]);
    }

    public function logout()
    {
        $this->disconnect();
        $this->redirect('home');
    }
}