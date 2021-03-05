<?php


namespace App\Controller;


use NeutronStars\Neutrino\Core\Controller;

class BoutiqueController extends Controller
{
    public function boutique ()
    {
        $this->render("app.boutique");
    }
}