<?php

namespace App\Http\Controllers;

use App\Models\album;
use Illuminate\Http\Request;
use App\Models\event;
class adminController extends Controller
{
    public function index(){
        return view('admin.pages.dashboard');
    }

    public function events(){
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

    public function albums(){
        $albums = album::orderBy('id', 'desc')->get();
        return view('admin.pages.albums', compact('albums'));
    }

    public function storeAlbum(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'release' => 'required',
            'youtube_link' => 'required',
            'cover_image' => 'required',
            'genre' => 'required'
        ]);
        $file = $request->cover_image;
        
        $file->move('image',$file->getClientOriginalName());
        $album = new album;
        $album->title = $request->title;
        $album->description = $request->description;
        $album->release = $request->release;
        $album->youtube_link = $request->youtube_link;
        $album->cover_image = $file = $file->getClientOriginalName();
        $album->genre = $request->genre;
        $album->save();
        return redirect('/admin/events')->with('success', 'album Berhasil Dibuat!');
    }

    public function updateAlbum(Request $request, album $album){
        $request->validate([
            'title' => 'nullable',
            'description' => 'nullable',
            'release' => 'nullable',
            'youtube_link' => 'nullable',
            'cover_image' => 'nullable',
            'genre' => 'nullable'
        ]);
        $album->title = $request->title;
        $album->description = $request->description;
        $album->release = $request->release;
        $album->youtube_link = $request->youtube_link;
        $album->cover_image = $request->cover_image;
        $album->genre = $request->genre;
        $album->save();
        return redirect('/admin/events')->with('success', 'album Berhasil Diupdate!');
    }

    public function deleteAlbum(album $album){
        $album->delete();
        return redirect('/admin/albums')->with('success', 'album Berhasil Dihapus!');
    }
}
