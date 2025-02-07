<?php

use App\Controllers\EventController;
use App\Core\Router;

$router = new Router();

$router->get('/evenets', [EventController::class, 'index']);
$router->get('/evenets/{id}', [EventController::class, 'show']);
$router->post('/evenets', [EventController::class, 'create']);
$router->put('/evenets/{id}', [EventController::class, 'update']);
$router->delete('/evenets/{id}', [EventController::class, 'delete']);
$router->post('/evenets/login', [EventController::class, 'login']);

