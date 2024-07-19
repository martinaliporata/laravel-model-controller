<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        // select * from movies
        $movies=Movie::all();
        return view('pages.index', compact('movies'));
    }
}
