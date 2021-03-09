<?php


namespace App\Controller;


use NeutronStars\Neutrino\Core\Controller;

class TournoisController extends Controller
{
    public function tournois ()
    {
        $this->render('app.tournois');
    }
    public function valhallakidz ()
    {
        $this->render('app.valhallakidz');
    }
}