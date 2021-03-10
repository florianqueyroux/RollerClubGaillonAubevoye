<?php


namespace App\Controller;


use NeutronStars\Neutrino\Core\Controller;

class RollerHockeyController extends Controller
{
    public function rollerHockey ()
    {
        $this->render('app.rollerhockey');
    }
    public function senior ()
    {
        $this->render('app.senior');
    }
    public function jeunesse ()
    {
        $this->render('app.jeunesse');
    }
}