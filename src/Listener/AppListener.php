<?php
namespace App\Listener;

use NeutronStars\Events\Listener;
use NeutronStars\FlashSession\FlashMessage;
use NeutronStars\Neutrino\Core\Kernel;
use NeutronStars\Neutrino\Event\CallRouteEvent;

class AppListener implements Listener
{
    public function onCallRoute(CallRouteEvent $event): void
    {
        if($event->getRoute()->getName() === 'home') {
            Kernel::get()
                ->getFlashSession()
                ->add('success', new FlashMessage('success', 'Listener: Le kernel a bien démarré !'));
        }
    }
}
