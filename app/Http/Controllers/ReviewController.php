<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\User;
use Illuminate\Http\Request;


class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Review::all();

        return view('reviews.index', compact('reviews'));
    }

    public function create()
    {
        $movies = Movie::all();
        $users = User::all();
        return view('reviews.create', compact('movies', 'users'));
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'movie_id' => 'required',
            'user' => 'required',
            'rating' => 'required',
            'review' => 'required',
            'tanggal' => 'required',
        ]);
        Review::create($validateData);
        return redirect('/reviews')->with('success', 'Data berhasil ditambahkan');
    }

    public function show(Review $review)
    {
        //
    }

    public function edit(Review $review)
    {
        $genres = Review::all();

        return view('reviews.edit', compact('review', 'reviews'));
    }

    public function update(Request $request, Review $review)
    {
        $validatedData = $request->validate([
            'movie_id' => 'required',
            'user' => 'required',
            'rating' => 'required',
            'review' => 'required',
            'tanggal' => 'required',
        ]);

        $review->update($validatedData);

        return redirect('/reviews')->with('success', 'Review updated successfully!');
    }

    public function destroy(Review $review)
    {
        $review->delete();
        return redirect('/reviews')->with('success', 'Data berhasil dihapus');
    }
}
