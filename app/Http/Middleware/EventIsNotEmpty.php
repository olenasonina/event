<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Http\Request;
use App\Models\Event;

class EventIsNotEmpty
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $eventId = session('eventId');
        
        if(!is_null($eventId)) {
            $event = Event::findOrFail($eventId);
            if($event->services->count() == 0) {
                session()->flash('warning', 'Ваш EVENT пуст.');
                return redirect()->route('index');
            }
        }
        return $next($request);
    }
}
