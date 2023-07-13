<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Review;
use Illuminate\Http\Request;

class MovieAppController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        $reviews = Review::all();

        return view('movieapp.index', compact('movies', 'reviews'));
    }
}
