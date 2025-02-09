<?php

namespace App\Controllers;

class EventController
{
    public function index(){
        require __DIR__ . "/../View/HomePage.php";
    }

    public function login(){
        require __DIR__ . "/../View/login.php";
    }

    public function organisateur(){
        require __DIR__ . "/../View/organisateur/dashboard.php";
    public function index($request = []) {
        require __DIR__ . "/../Views/homePage.php";
    }
 
}
