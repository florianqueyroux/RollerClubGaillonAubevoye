<?php


namespace App\Controller\Admin;


use App\Form\CheckBoxElement;
use App\Form\DateTimeElement;
use App\Form\SelectElement;
use App\Form\SubmitElement;
use App\Form\TextElement;
use App\Form\TextAreaElement;
use App\Model\EventsModel;
use NeutronStars\Form\Form;

class EventsController extends AdminController
{
    public function events()
    {
        (new Form())->toHTML(); //Permet de generer un token XSRF en mode sale par Neutronstars
        $this->render('admin.events.events',[
            'events'=>(new EventsModel())->getAllEvents(),
            'flashes'=>$this->getFlash(),
            'xsrf'=>$_SESSION['__token-XSRF'] //token de session qui me permet de valider mes formulaires
        ]);
    }

    public function new()
    {
        $eventModel = new EventsModel();
        $form = (new Form($_POST))
            ->add(new SelectElement('CATEGORIE','category', $eventModel->getSimpleCategory()))
            ->add(new TextElement('TITRE','title', NULL, [
                'min'=>3,
                'max'=>50,
            ]))
            ->add(new TextAreaElement('DESCRIPTION', 'description', NULL,[
                'min'=>10,
                'max'=>255
            ]))
            ->add(new DateTimeElement('DÉBUT', 'start'))
            ->add(new DateTimeElement('FIN', 'end'))
            ->add(new SubmitElement('Créer'));

        if($form->isSubmit() && $form->isValid()){
            $eventModel->insertEvent(
                $form->get('category'),
                $form->get('title'),
                $form->get('description'),
                $form->get('start'),
                $form->get('end')
            );

            $this->addFlash('success','Bien joué ! tu sais ajouter un événement');
            $this->redirect('admin.events');
        }

        $this->render('admin.events.new',[
            'form'=>$form
        ]);
    }

    public function edit(int $id)
    {
        $eventModel = new EventsModel();
        $event = $eventModel->getEvent($id);

        if($event === NULL){
            $this->addFlash('error', 'Aucun événement');
            $this->redirect('admin.events');
        }

        $form = (new \App\Form\Form($_POST, [
            'category'=>$event->getCategory()->getId(),
            'title'=>$event->getTitle(),
            'description'=>$event->getDescription(),
            'start'=>$event->getBegin()->format('Y-m-d\TH:i:s'),
            'end'=>$event->getEnd()->format('Y-m-d\TH:i:s'),
            'cancel'=>$event->isCancel() ? '1' : '0'
        ]))
            ->add(new SelectElement('CATEGORIE','category', $eventModel->getSimpleCategory()))
            ->add(new TextElement('TITRE','title', NULL, [
                'min'=>3,
                'max'=>50,
            ]))
            ->add(new TextAreaElement('DESCRIPTION', 'description', NULL,[
                'min'=>10,
                'max'=>255
            ]))
            ->add(new DateTimeElement('DÉBUT', 'start'))
            ->add(new DateTimeElement('FIN', 'end'))
            ->add(new CheckBoxElement('Annuler', 'cancel'))
            ->add(new SubmitElement('Éditer','edit'));

        if($form->isSubmit() && $form->isValid()){
            $eventModel->updateEvent(
                $id,
                $form->get('category'),
                $form->get('title'),
                $form->get('description'),
                $form->get('start'),
                $form->get('end'),
                $form->get('cancel')
            );

            $this->addFlash('success','bien joué ! tu sais te servir de ma fonction');
            $this->redirect('admin.events');
        }

        $this->render('admin.events.edit',[
            'form'=>$form
        ]);
    }

    public function cancel(int $id)
    {
        $eventModel = new EventsModel();
        $event = $eventModel->getEvent($id);

        if ($event === NULL) {
            $this->addFlash('error', 'Aucun événement 1');
            $this->redirect('admin.events');
        }

        $form = (new \App\Form\Form($_POST))
            ->add(new CheckBoxElement('Annuler', 'cancel'));

        if ($form->isSubmit() && $form->isValid()) {
            $eventModel->updateCancelEvent(
                $id,
                $form->get('cancel')
            );

            $this->addFlash('warning', 'T\'es sur de toi ? Vraiment ????');
            $this->redirect('admin.events');
        }
        $this->addFlash('error', $form->isSubmit() ? 'true' : 'false');
        $this->redirect('admin.events');
    }
}