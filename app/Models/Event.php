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
        $query = "SELECT DATE_PART('day', events.date) as day,TO_CHAR(events.date, 'Month') as month,events.organizer_id,events.title,events.description,events.location,events.date,events.event_image,categories.id,events.id,events.price,events.created_at,events.start_time,events.end_time,categories.name FROM events
        inner join event_categories on event_categories.event_id=events.id
        inner join categories on categories.id=event_categories.category_id";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return  $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function create($request){
        parent::create($request);
    }
}   