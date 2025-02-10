<?php

namespace App\Controllers;

class EventController
{
 

    public function login(){
        require __DIR__ . "/../View/login.php";
    }

    public function organisateur(){
        require __DIR__ . "/../Views/Organisateur/OrgDashboard.php";
        
    }
    public function index($request = []) {
        require __DIR__ . "/../Views/homePage.php";
    }
 
}
