<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function show_project() {
        $eventId = session('eventId');
        if(!is_null($eventId)) {
            $event = Event::findOrFail($eventId);
        }
        return view('project', compact('event'));
        // return view('project');
    }

    public function show_one_project($id = null) {
        return view('project_ready');
    }

    public function eventConfirm() {
        $eventId = session('eventId');
        if(is_null($eventId)) {
            return redirect()->route('index');
        }
        $events = Event::all();
        $event =  $events->find($eventId);
        $event->save();
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
        $event->services()->attach($serviceId);
        
        return redirect()->route('show_project');
        // return view('project', compact('event'));
    }

    public function project_remove($serviceId) {
        $eventId = session('eventId');
        if(is_null($eventId)) {
            return redirect()->route('show_project');
            // return view('project', compact('event'));
        }
        $events = Event::all();
        $event =  $events->find($eventId);
        $event->services()->detach($serviceId);

        return redirect()->route('show_project');
        // return view('project', compact('event'));
    }
}
