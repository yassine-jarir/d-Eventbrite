<?php 

namespace App\Models;
use App\Core\Database;

class Event
{
    protected $db ;
    
    public function __construct(){
        $this->db = Database::connection();
    }

    public function getAll(){
        $sql = "SELECT * fROM events";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return  $stmt->fetchAll();
    }
}   