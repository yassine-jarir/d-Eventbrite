<?php

namespace App\Controllers;
use App\Models\Event;

class EventController
{
 
    private $eventModel;

    public function __construct() {
        $this->eventModel = new Event();
    }
    public function index() {
        $events = $this->eventModel->getAll();
        require __DIR__ . "/../Views/homePage.php";
    }

    public function login(){
        require __DIR__ . "/../View/login.php";
    }

    public function organisateur(){
        require __DIR__ . "/../Views/Organisateur/OrgDashboard.php";
        
    }
 
}
