<?php


namespace App\Model;


use App\Entity\CategoryEvent;
use App\Entity\Event;
use NeutronStars\Database\Query;
use NeutronStars\Neutrino\Core\Kernel;
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
            ->orderBy('e.begin_at', Query::ORDER_BY_ASC)
            ->where('e.end_at > NOW()')
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

    public function getAllEvents()
    {
        $results = $this->createQuery('e')
            ->select('e.*', 'c.id cat_id', 'c.name cat_name', 'c.created_at cat_created_at')
            ->join('category_events c', 'c.id = e.category')
            ->orderBy('e.begin_at', Query::ORDER_BY_ASC)
            ->getResults();
        $categories = [];
        $events = [];

        foreach ($results as $result) {
            if (empty($categories[$result->cat_id])) /*Savoir si l'objet categorie existe bien*/ {
                $categories[$result->cat_id] = new CategoryEvent((object)[
                    'id' => $result->cat_id,
                    'name' => $result->cat_name,
                    'created_at' => $result->cat_created_at
                ]);
            }
            $events[] = new Event($categories[$result->cat_id], $result);
            /*$events [id categorie][id event] = new event*/
        }
        return $events; /*retourne l'events pour remplir le tableau - le $categorie est provisoire*/
    }

    public function getSimpleCategory():array
    {
        $results = Kernel::get()->getDatabase()->query('category_events c')
                                                ->select('c.id', 'c.name')
                                                ->getResults();
        $categories = [];
        foreach ($results as $result){
            $categories[$result->id] = $result->name;
        }
        return $categories;
    }

    public function insertEvent(int $category, string $title, string $description, string $start, string $end)
    {
        $this->createQuery()
            ->insertInto('category, title, description, begin_at, end_at, created_at', '?,?,?,?,?,NOW()')
            ->setParameters([
                $category, $title, $description, $start, $end
            ])
            ->execute();
    }

    public function getEvent(int $id): ?Event
    {
        $result = $this->createQuery('e')
            ->select('e.*','c.id cat_id','c.name cat_name','c.created_at cat_created_at')
            ->join('category_events c','c.id = e.category')
            ->where('e.id = ?')
            ->setParameters([$id])
            ->getResult();
        if($result === NULL){
            return null;
        }
        $categorie = new CategoryEvent((object)[
            'id'=>$result->cat_id,
            'name'=>$result->cat_name,
            'created_at'=>$result->cat_created_at
        ]);
        return new Event($categorie, $result);
    }

    public function updateEvent(int $id, int $category, string $title, string $description, string $start, string $end,
                                int $cancel)
    {
        $this->createQuery()
            ->update('category = ?, title = ?, description = ?, begin_at = ?, end_at = ?, cancel = ?')
            ->where('id = ?')
            ->setParameters([
                $category, $title, $description, $start, $end, $cancel, $id
            ])
            ->execute();
    }

    public function updateCancelEvent(int $id, int $cancel)
    {
        $this->createQuery()
            ->update('cancel = ?')
            ->where('id = ?')
            ->setParameters([
                $cancel, $id
            ])
            ->execute();
    }
}