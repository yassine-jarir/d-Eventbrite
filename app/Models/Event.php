<?php 

namespace App\Models;
use App\Core\Database;

class Event extends Model
{
    protected $db ;
    protected $table = "events";
    
    public function __construct(){
        $this->db = Database::connection();
    }

    public function getAll(){
        $query = "SELECT * FROM events";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return  $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function create($request){
        parent::create($request);
    }
}   