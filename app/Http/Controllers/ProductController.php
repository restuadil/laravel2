<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('movieapp/product.product', compact('movies'));
    }

    public function show($id)
    {
        // Ambil data produk berdasarkan ID
        $product = Movie::find($id);
        $movies  = Movie::all();

        // Kirim data produk ke halaman detail
        return view('movieapp/product.detail', ['product' => $product, 'movies' => $movies]);
    }
}
