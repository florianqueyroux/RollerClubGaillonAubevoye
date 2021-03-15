<?php


namespace App\Controller;


use NeutronStars\Neutrino\Core\Controller;

class EquipeController extends Controller
{
    public function equipe()
    {
        $this->render('app.equipe',[
            'age'=> function ($date){
                return date_diff(new \DateTime(), new \DateTime($date))->y;
            }
        ]);
    }
}