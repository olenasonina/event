<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function show_project() {
        // $eventId = session('eventId');
        // if(!is_null($eventId)) {
        //     $event = findOrFail($eventId);
        // }
        // return view('project', compact('event'));
        return view('project');
    }

    public function show_one_project($name = null) {
        return view('project_ready');
    }

    public function project_add($serviceId) 
    {
        $eventId = session('eventId');
        if(is_null($eventId)) {
            $eventId = Event::create()->id;
            session(['eventId' => $eventId]);
        } else {
            $events = Event::all();
            $event =  $events->find($eventId);
        }
        
        

        dump($event);
    }
}
