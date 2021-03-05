<?php


namespace App\Controller;


use NeutronStars\Neutrino\Core\Controller;

class RollerHockeyController extends Controller
{
    public function rollerHockey ()
    {
        $this->render('app.rollerhockey');
    }
}