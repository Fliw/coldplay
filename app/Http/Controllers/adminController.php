<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\event;

class adminController extends Controller
{
    public function index(){
        return view('admin.pages.dashboard');
    }

    public function events(){
        //get all data from event table sort it by desc
        $events = event::orderBy('id', 'desc')->get();
        return view('admin.pages.events', compact('events'));
    }

    public function storeEvent(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
            'time' => 'required',
            'location' => 'required',
        ]);
        $event = new event;
        $event->title = $request->title;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->time = $request->time;
        $event->location = $request->location;
        $event->save();
        return redirect('/admin/events')->with('success', 'Event Berhasil Dibuat!');
    }

    public function updateEvent(Request $request, event $event){
        $request->validate([
            'title' => 'nullable',
            'description' => 'nullable',
            'date' => 'nullable',
            'time' => 'nullable',
            'location' => 'nullable',
        ]);
        $event->title = $request->title;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->time = $request->time;
        $event->location = $request->location;
        $event->save();
        return redirect('/admin/events')->with('success', 'Event Berhasil Diupdate!');
    }

    public function deleteEvent(event $event){
        $event->delete();
        return redirect('/admin/events')->with('success', 'Event Berhasil Dihapus!');
    }
}
