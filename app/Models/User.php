<?php
namespace App\Models;

use PDO;
use App\Core\Database;

class User {
    private $db;
    
    public function __construct() {
  $this->db = Database::connection();      
    }

     public function getUserByUsername($email) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

     public function createUser($name, $password,$email, $role) {
        $stmt = $this->db->prepare("INSERT INTO users (email, password, role, name) VALUES (:email, :password, :role, :name)");
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);  
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->bindParam(':role', $role);
        $stmt->bindParam(':name', $name);
         return $stmt->execute();
    }

     public function validateUser($username, $password) {
        $user = $this->getUserByUsername($username);
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        return false;
    }
}
