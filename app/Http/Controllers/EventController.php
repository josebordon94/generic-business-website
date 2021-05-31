<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $events = Event::orderByDesc('updated_at')->get();
        return (view('events/show', compact('events')));
    }

    public function admin(){
        $events = Event::orderByDesc('updated_at')->get();
        return(view('events/admin', compact('events')));
    }

    public function create(){
        return(view('events/create'));
    }

    public function store(Request $request){
        $event = new Event();
        $event->title = $request->title;
        $event->content = $request->content;
        $event->save();
        return redirect()->route('events.admin');
    }

    public function delete($id){
        $user = Event::find($id);
        $user->delete();
        return redirect()->route('events.admin');
    }
}
