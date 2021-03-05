<?php


namespace App\Controller;


use NeutronStars\Neutrino\Core\Controller;

class RollerController extends Controller
{
    public function roller ()
    {
        $this->render('app.roller');
    }
}