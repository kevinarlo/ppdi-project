<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class VideoController extends Controller
{
    public function index()
    {
        $items = Video::latest()->paginate(40);

        return view('pages.video', [
            'items' => $items
        ]);
    }
}
