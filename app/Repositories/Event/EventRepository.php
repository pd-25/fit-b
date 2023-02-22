<?php

namespace App\Repositories\Event;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EventRepository implements EventInterface
{

    public function singleImageUpload($imageData)
    {

        $content_db = time() . rand(0000, 9999) . "." . $imageData->getClientOriginalExtension();
        $imageData->storeAs("public/EventImage", $content_db);
        return $content_db;
    }

    public function storeEvent(array $eventData, array $subEventData)
    {
        $slug = Str::slug($eventData['title']);
        $slug_count = DB::table('gym_events')->where('slug',$slug)->count();
        if($slug_count>0){
            $slug = random_int(100000, 999999).'-'.$slug;
        }
        $eventData['slug'] = $slug;
        $eventData["created_at"] = date("Y-m-d");
        if ($eventData['image'] != null) {
            $eventData['image'] = $this->singleImageUpload($eventData['image']);
        }
        // $eventData['gym_id'] = auth()->
        dd(DB::table('gym_events')->insertGetId($eventData));

        

    }
}
