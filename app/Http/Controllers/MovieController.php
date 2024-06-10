<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index() {
        $arrayMovie = Movie::all();
        // dd($arrayMovie);

        return view('movie', compact('arrayMovie'));
    }
}
