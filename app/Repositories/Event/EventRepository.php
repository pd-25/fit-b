<?php

namespace App\Repositories\Event;

use App\Models\GymEvent;
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
        try {
            // if (isset($subEventData['addMoreSubEvent'][0])) { //here checking if event has atleast one subevent in 0-index
                $slug = Str::slug($eventData['title']);
                $slug_count = DB::table('gym_events')->where('slug', $slug)->count();
                if ($slug_count > 0) {
                    $slug = random_int(100000, 999999) . '-' . $slug;
                }
                $eventData['slug'] = $slug;
                $eventData["created_at"] = date("Y-m-d");
                if (isset($eventData['image']) && $eventData['image'] != null) {
                    $eventData['image'] = $this->singleImageUpload($eventData['image']);
                }

                $eventData['gym_id'] = auth()->guard('mygym')->id();
                $new_event = DB::table('gym_events')->insertGetId($eventData);
                // dd($new_event);

                if (!empty($new_event) && $new_event >= 0) {
                    $new_subevent = [];
                    foreach ($subEventData['addMoreSubEvent'] as $subEvent) {
                        $subEvent['gym_event_id'] = $new_event;
                        $slug2 = Str::slug($subEvent['sub_event_name']);
                        $slug_count2 = DB::table('gym_subevents')->where('slug', $slug2)->count();
                        if ($slug_count2 > 0) {
                            $slug2 = random_int(100000, 999999) . '-' . $slug2;
                        }
                        $subEvent['slug'] = $slug2;
                        array_push($new_subevent, $subEvent);
                    }
                    return DB::table('gym_subevents')->insert($new_subevent);
                }else{
                    return "Error occur in event creation, try again properly";
                }
           
        } catch (\Throwable $th) {
            return $th;
        }
    }

    public function getGymWiseAllEvent(){
        return DB::table('gym_events')->where('gym_events.gym_id', auth()->guard('mygym')->id())->select('gym_events.title', 'gym_events.status','gym_events.slug','gym_events.id',DB::raw("count(gym_subevents.id) as total_subevent"))
                                        ->join('gym_subevents', 'gym_events.id', '=', 'gym_subevents.gym_event_id')
                                        ->groupBy('gym_events.id')
                                        ->get();
        
    }
}
