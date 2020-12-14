<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Photo;
use App\Video;
use App\Post;
use App\Message;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $items = Photo::all()->count();
        $items1 = Video::all()->count();
        $items2 = Post::all()->count();
        $items3 = Message::all()->count();
        return view('pages.admin.dashboard', [
            'items' => $items,
            'items1' => $items1,
            'items2' => $items2,
            'items3' => $items3
        ]);
    }
}
