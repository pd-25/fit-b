<?php

namespace App\Http\Controllers\Mygym\Event;

use App\Http\Controllers\Controller;
use App\Http\Requests\Event\EventRequest;
use Illuminate\Http\Request;

class EventController extends Controller
{
   
    public function index()
    {
        return view('Mygym.Events.index');
    }

    public function create()
    {
        return view('Mygym.Events.create');
    }

    public function store(EventRequest $request)
    {
        $data  = $request->all();
        dd($data);
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
