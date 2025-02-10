<?php

namespace App\Controllers;
use App\Core\AuthService;

class AjaxController {
    public function loadPage() {
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
             $allowedPages = ['ManageEvent', 'ManageUsers', 'profile'];
            
        if (AuthService::hasRole('organisateur')) {
        if (in_array($page, $allowedPages)) {
            include __DIR__ . "/../Views/Organisateur/partials/organisateur/{$page}.php";
            } else {
            echo "<h3>Page not found</h3>";
        }           
        } 
        if (AuthService::hasRole('admin')) {
            if (in_array($page, $allowedPages)) {
                include __DIR__ . "/../Views/Organisateur/partials/admin/{$page}.php";
              } else {
                echo "<h3>Page not found</h3>";
            }           
        } 
        } else {
            echo "<h3>Invalid request</h3>";
        }
    }
}
