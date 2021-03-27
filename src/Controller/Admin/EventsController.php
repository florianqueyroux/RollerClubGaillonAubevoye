<?php


namespace App\Controller\Admin;


use App\Model\EventsModel;

class EventsController extends AdminController
{
    public function events()
    {
        $this->render('admin.events',[
            'events'=>(new EventsModel())->getAllEvents()
        ]);
    }
}