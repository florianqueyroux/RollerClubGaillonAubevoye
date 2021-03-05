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
        $_SERVER['REQUEST_URI'] ?? '404',
        $configuration->get('baseUrl', '')
    )
);
Kernel::get()->registerRoutes(new Configuration('../config/routes.json'));
Kernel::get()->handle();
