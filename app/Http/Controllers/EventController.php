<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function show_project() {
        $eventId = session('eventId');
        if(!is_null($eventId)) {
            $event = Event::findOrFail($eventId);
        }
        return view('project', compact('event'));
        
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
        
        if(Auth::check()) {
            $event->user_id = Auth::id();
            $event->save();
        }

        $service = Service::find($serviceId);
        session()->flash('success', 'Добавлен сервис ' . $service->service_name);
        return redirect()->route('show_project');
        
    }

    public function project_remove($serviceId) {
        $eventId = session('eventId');
        if(is_null($eventId)) {
            return redirect()->route('show_project');
            
        }
        $events = Event::all();
        $event =  $events->find($eventId);
        $event->services()->detach($serviceId);
        $service = Service::find($serviceId);
        session()->flash('success', 'Удален сервис ' . $service->service_name);

        return redirect()->route('show_project');
    }
}
