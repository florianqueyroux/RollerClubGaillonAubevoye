<?php


namespace App\Controller;


use NeutronStars\Neutrino\Core\Controller;

class TournoisController extends Controller
{
    public function tournois ()
    {
        $this->render('app.tournois');
    }
}