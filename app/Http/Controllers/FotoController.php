<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class FotoController extends Controller
{
    public function index()
    {
        $items = Photo::latest()->paginate(40);

        return view('pages.foto', [
            'items' => $items
        ]);
    }
}
