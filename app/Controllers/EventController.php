<?php

namespace App\Controllers;

class EventController
{
    public function index(){
        require __DIR__ . "/../View/HomePage.php";
        echo "controller";
    }
}