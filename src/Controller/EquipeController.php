<?php


namespace App\Controller;


use NeutronStars\Neutrino\Core\Controller;

class EquipeController extends Controller
{
    public function equipe()
    {
        $this->render('app.equipe');
    }
}