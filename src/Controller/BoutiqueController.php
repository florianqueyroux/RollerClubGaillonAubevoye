<?php


namespace App\Controller;


use NeutronStars\Neutrino\Core\Controller;

class BoutiqueController extends Controller
{
    public function boutique ()
    {
        $this->render("app.boutique");
    }
    public function rcga ()
    {
        $this->render("app.rcga");
    }
    public function hockey ()
    {
        $this->render("app.hockey");
    }
}