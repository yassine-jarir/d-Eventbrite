<?php

use App\Core\Routes;
use App\Controllers\EventController;
use App\Controllers\AuthController;

$router = new Routes();

$router->get('/', [EventController::class, 'index']);

$router->get('/login', [AuthController::class, 'showLoginPage']);
$router->post('/login', [AuthController::class, 'login']);

$router->post('/signup', [AuthController::class, 'signup']);
$router->get('/signup', [AuthController::class, 'showSignupPage']);

$router->get('/admin/adminDashboard', [AuthController::class, 'dashboard']);
$router->get('/organisateur/organisateurDashboard', [AuthController::class, 'dashboard']);
$router->get('/participant', [AuthController::class, 'dashboard']);

 return $router;
