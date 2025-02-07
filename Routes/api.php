<?php


use App\Core\Routes;
use App\Controllers\EventController;

$router = new Routes();

$router->get('/', [EventController::class, 'index']);

return $router;