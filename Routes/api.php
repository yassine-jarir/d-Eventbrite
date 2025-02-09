<?php


use App\Core\Routes;
use App\Controllers\EventController;

$router = new Routes();

$router->get('/', [EventController::class, 'index']);
$router->get('/login', [EventController::class, 'login']);
$router->get('/organisateur', [EventController::class, 'organisateur']);

return $router;