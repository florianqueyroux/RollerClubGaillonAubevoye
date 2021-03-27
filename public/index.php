<?php
session_start();
use NeutronStars\Neutrino\Core\Configuration;
use NeutronStars\Neutrino\Core\Kernel;
use NeutronStars\Router\Router;
require_once '../vendor/autoload.php';
$configuration = new Configuration('../config/config.json');
Kernel::create(
    $configuration,
    new Router(
        $configuration->get('domainUrl', 'http://127.0.0.1'),
        str_replace('?'.($_SERVER['QUERY_STRING'] ?? ''), '', $_SERVER['REQUEST_URI'] ?? '404'),
        $configuration->get('baseUrl', '')
    )
);
Kernel::get()
    ->registerListeners(new Configuration('../config/listeners.json'))
    ->registerRoutes(new Configuration('../config/routes.json'))
    ->handle();
