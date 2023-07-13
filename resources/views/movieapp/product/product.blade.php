@extends('layouts.index')
@section('app')
    <section id="features" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Our Best Products</h2>
            <div class="w-75 mx-auto">
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, quo?</p>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet blanditiis
                    consectetur
                    quasi illo beatae ea temporibus itaque dignissimos fugit molestiae, alias, cum, hic consequuntur
                    magni
                    perspiciatis repellendus tempore nesciunt ab maiores. Quam corporis ad, placeat illum vel quasi
                    architecto itaque modi, ipsam hic consequatur atque explicabo sequi vitae, dicta odio!</p>
            </div>
            <div class="row">
                @foreach ($movies as $movie)
                    <div class="col-md-3">
                        <div class="card mb-4">
                            <img src="{{ $movie->poster }}" class="card-img-top"
                                style="object-fit: contain; height: 250px; margin-top: 15px">
                            <div class="card-body text-center">
                                <h5 class="card-title ">{{ $movie->judul }}</h5>
                                <p class="card-text ">{{ $movie->genre->nama }}</p>
                                <a href="/movieapp/product/{{ $movie->id }}" class="btn btn-outline-primary">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
