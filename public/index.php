<?php


require_once '../vendor/autoload.php';

$routes = include __DIR__."/../Routes/api.php";

$requestMethod = $_SERVER['REQUEST_METHOD'];
$requestUri = $_SERVER['REQUEST_URI'];

$routes->Dispatch($requestMethod, $requestUri);