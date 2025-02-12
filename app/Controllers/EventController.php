<?php

namespace App\Controllers;
use App\Models\Event;

class EventController
{
 
    private $model;

    public function __construct() {
        $this->model = new Event();
    }
    public function index() {
        $events = $this->model->getAll();
        require __DIR__ . "/../Views/homePage.php";
    }

    
// ===============================mustapha ajouter==================
    public function dernierEvent() {
        $events = $this->model->getDerniereEvent();
        require __DIR__ . "/../Views/participant/events.php";
    }

    public function organisateur(){
        $events = $this->model->getAll();
        require __DIR__ . "/../Views/Organisateur/OrgDashboard.php";
    }

    public function create($request){

            $request = [
                'title' => $request['title'],
                'description' => $request['description'],
                'content' => $request['location'],
                'category_id' => $request['date'],
                'price' => $request['price'],
                'status' => $request['status'],
                'image' => $request['image'],
            ];

            if ($this->model->create($request)) {
                $this->response(['message' => 'Ressource créée avec succès.'], 201);
                return;
            }
    }
 
}
