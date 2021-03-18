<?php


namespace App\Model;


use App\Entity\CategoryEvent;
use App\Entity\Event;
use NeutronStars\Database\Query;
use NeutronStars\Neutrino\Core\Model;

class EventsModel extends Model
{
    public function __construct()
    {
        parent::__construct('events');
    }
    public function getEvents()
    {
        $results = $this->createQuery('e')
            ->select('e.*','c.id cat_id','c.name cat_name','c.created_at cat_created_at')
            ->join('category_events c','c.id = e.category')
            ->orderBy('e.date_at', Query::ORDER_BY_DESC)
            ->getResults();
        $categories = [];
        $events = [];

        foreach ($results as $result)
        {
            if(empty($categories[$result->cat_id])) /*Savoir si l'objet categorie existe bien*/
            {
                $categories[$result->cat_id] = new CategoryEvent((object)[
                   'id'=>$result->cat_id,
                   'name'=>$result->cat_name,
                   'created_at'=>$result->cat_created_at
                ]);
            }
            if(empty($events[$result->cat_id])) /*Je verifie si le tableau evenement relié a categorie existe bien*/
            {
                $events[$result->cat_id] = [];
            }
            $events[$result->cat_id][$result->id] = new Event($categories[$result->cat_id],$result);
            /*$events [id categorie][id event] = new event*/
        }
        return $events; /*retourne l'events pour remplir le tableau - le $categorie est provisoire*/
    }
}