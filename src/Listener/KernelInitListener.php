<?php


namespace App\Listener;


use App\Model\UsersModel;
use NeutronStars\Events\Listener;
use NeutronStars\Neutrino\Event\KernelEvent;

class KernelInitListener implements Listener
{
    public function authenticate(KernelEvent $event)
    {
        if(empty($_SESSION['auth_user'])){
            $event->getKernel()->user=NULL;
            $event->getKernel()->isConnected=false;
            return;
        }
        if(empty($_SESSION['auth_user']['id']) || empty($_SESSION['auth_user']['timeout'])
            || time()-$_SESSION['auth_user']['timeout'] >= 3600){ //1h de connection avant de dégager
            unset($_SESSION['auth_user']);
            $event->getKernel()->user=NULL;
            $event->getKernel()->isConnected=false;
            return;
        }
        $user=(new UsersModel())->getUserById($_SESSION['auth_user']['id']);
        if($user === NULL){
            unset($_SESSION['auth_user']);
            $event->getKernel()->user=NULL;
            $event->getKernel()->isConnected=false;
            return;
        }
        $event->getKernel()->user=$user;
        $event->getKernel()->isConnected=true;
        $_SESSION['auth_user']['timeout']=time();
    }
}