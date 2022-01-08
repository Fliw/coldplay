<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\event;
use App\Models\album;

class pagesController extends Controller
{
    public function index()
    {
        $events = event::all();
        $albums = album::all();
        $data = ['events' => $events, 'album' => $albums];
        return view('home', compact('data'));
    }

    public function album(album $album)
    {
        return view('pages.albumDetail', compact('album'));
    }

    public function event(){
        $events = event::all();
        return view('pages.event', compact('events'));
    }
}
