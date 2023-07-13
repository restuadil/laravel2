@extends('layouts.index')
@section('app')
    <header class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="display-4">Welcome to Movie App</h1>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, quas quos ut
                        tenetur impedit enim voluptatum perferendis! Est excepturi maxime minus tenetur! Totam,
                        voluptate minus dicta cumque optio vero harum?.</p>
                    <div class="d-flex justify-content-around">
                        <a class="btn btn-primary btn-lg" href="#" role="button">Get Started</a>
                        <a class="btn btn-light btn-lg" href="#" role="button">Talk to Sales</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="https://picsum.photos/600/300?anime" alt="About Movie App" class="img-fluid">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6">
                    <p>Working With The Best</p>
                </div>
            </div>
        </div>
    </header>
    <section id="features" class="py-5 bg-light justify-center">
        <div class="container">
            <div class="container">
                <h1 class="text-center mb-5">Our Recomendations</h1>
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
                                        <a href="/movieapp/product/{{ $movie->id }}" class="btn btn-outline-primary">Read
                                            More</a>
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
    <section id="features" class="py-5 bg-light">
        <div class="container">
            <h1 class="text-center mb-5">Reviews By User</h1>
            <div class="card-deck">
                @php
                    $count = 0;
                    $randomReviews = $reviews->shuffle();
                @endphp
                @foreach ($randomReviews as $review)
                    @if ($count < 4)
                        <div class="card">
                            <div class="card-body flex-col justify-content-between">
                                <h5 class="card-title text-center">{{ $review->movie->judul }}</h5>
                                <hr>
                                <p class="card-text"><strong>User: </strong>{{ $review->user }}</p>
                                <p class="card-text"><strong>Rating: </strong>{{ $review->rating }}</p>
                                <p class="card-text text-justify"><strong>Review: </strong><br>{{ $review->review }}</p>
                                <p class="card-text"><strong>Tanggal: </strong>{{ $review->tanggal }}</p>
                            </div>
                        </div>
                    @endif
                    @php $count++; @endphp
                @endforeach
            </div>
        </div>
    </section>
@endsection
