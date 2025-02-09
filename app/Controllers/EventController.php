<?php

namespace App\Controllers;

class EventController
{
    public function index($request = []) {
        require __DIR__ . "/../Views/homePage.php";
    }
 
}
