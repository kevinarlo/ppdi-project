<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Post;
use App\Video;

class HomeController extends Controller
{
    public function index()
    {
        $items = Photo::latest()->take(3)->get();
        $items1 = Post::latest()->limit(9)->get();
        $items2 = Video::latest()->take(3)->get();

        return view('pages.home', [
            'items' => $items,
            'items1' => $items1,
            'items2' => $items2
        ]);
    }
}
