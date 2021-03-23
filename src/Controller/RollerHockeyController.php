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
    public function seniorResultat ()
    {
        $this->render('app.resultats');
    }
    public function juniorResultat ()
    {
        $this->render('app.resultats');
    }
    public function seniorEffectif ()
    {
        $this->render('app.effectif',[
            'age'=> function ($date){
                return date_diff(new \DateTime(), new \DateTime($date))->y;
            }
        ]);
    }
    public function juniorEffectif ()
    {
        $this->render('app.effectif',[
            'age'=> function ($date){
                return date_diff(new \DateTime(), new \DateTime($date))->y;
            }
        ]);
    }
}