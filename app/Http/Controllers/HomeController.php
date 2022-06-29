<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $movies = Movie::all();
        $data = [
            'movies' => $movies,
        ];
        // dd($movies);
        return view('home', $data);
    }
}
