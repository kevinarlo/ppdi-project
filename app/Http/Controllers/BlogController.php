<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function index()
    {
        $items = Post::latest()->paginate(10);
        return view('pages.blog',[
            'items' => $items
        ]);
    }
}
