<?php

use App\Core\Routes;
use App\Controllers\EventController;
use App\Controllers\AuthController;
use App\Controllers\AjaxController;

$router = new Routes();

$router->get('/', [EventController::class, 'index']);
// $router->get('/login', [EventController::class, 'login']);

$router->get('/login', [AuthController::class, 'showLoginPage']);
$router->post('/login', [AuthController::class, 'login']);

$router->get('/signup', [AuthController::class, 'showSignupPage']);
$router->post('/signup', [AuthController::class, 'signup']);

$router->get('/logout', [AuthController::class, 'logout']);


$router->get('/admin/adminDashboard', [AuthController::class, 'dashboard']);
$router->get('/participant', [AuthController::class, 'dashboard']);

$router->get('/logout', [AuthController::class, 'logout']);

// roles
$router->get('/organisateur', [AuthController::class, 'dashboard']);
$router->get('/admin', [AuthController::class, 'dashboard']);
 $router->get('/participant', [AuthController::class, 'dashboard']);

 
$router->get('/ajax/load_page', [AjaxController::class, 'loadPage']);

$router->get('/events', [EventController::class, 'index']);
$router->get('/addEvent', [EventController::class, 'create']);

 return $router;

 