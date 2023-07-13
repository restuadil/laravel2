@extends('layouts.index')
@section('app')

    <body>
        <div class="hero">
            <div>
                <img class="hero-image"src="{{ $product->poster }}">
            </div>
            <div class="hero-content">
                <h2>{{ $product->judul }}</h2>
                <button class="btn btn-primary">{{ $product->genre->nama }}</button>
                <button class="btn btn-primary">{{ $product->rating }}/10<i class="bi bi-star-fill"></i></button>
                <p>{{ $product->synopsis }}</p>
            </div>
        </div>

        <section id="features" class="py-5 bg-light justify-center">
            <div class="container">
                <div class="container">
                    <div class="row">
                        @php
                            $count = 0;
                            $randomMovies = $movies->shuffle();
                        @endphp
                        @foreach ($randomMovies as $movie)
                            @if ($count < 4)
                                <div class="col-md-3">
                                    <div class="card mb-4">
                                        <img src="{{ $movie->poster }}" class="card-img-top"
                                            style="object-fit: contain; height: 250px; margin-top: 15px">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">{{ $movie->judul }}</h5>
                                            <p class="card-text">{{ $movie->genre->nama }}</p>
                                            <a href="/movieapp/product/{{ $movie->id }}"
                                                class="btn btn-outline-primary">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @php $count++; @endphp
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </body>
@endsection
