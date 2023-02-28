<?php

namespace App\Http\Controllers\Mygym\Event;

use App\Http\Controllers\Controller;
use App\Http\Requests\Event\EventRequest;
use App\Repositories\Event\EventInterface;
use Illuminate\Http\Request;

class EventController extends Controller
{
    private $event;

    public function __construct(EventInterface $eventInterface)
    {
        $this->event = $eventInterface;
    }

    public function index()
    {
        $data['my_gym_events'] = $this->event->getGymWiseAllEvent();
        return view('Mygym.Events.index', $data);
    }

    public function create()
    {
        return view('Mygym.Events.create');
    }

    public function store(EventRequest $request)
    {
        $data  = $request->only('title', 'venue', 'start_date', 'end_date', 'image', 'short_desc', 'description');
        $data_subevents = $request->only('addMoreSubEvent');
        
            $store_result = $this->event->storeEvent($data, $data_subevents);
        
            if($store_result == true){
                return redirect()->route('my-gym-events.index')->with('msg', 'Event created successfully and sent for verification.');
            }else{
                return back()->with('msg', @$store_result);
            }
       
        
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
