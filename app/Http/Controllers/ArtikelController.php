<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class ArtikelController extends Controller
{
    public function index(Request $request, $slug)
    {
        $item = Post::where('slug', $slug)->firstOrFail();

        return view('pages.artikel', [
            'item' => $item
        ]);;
    }
}
