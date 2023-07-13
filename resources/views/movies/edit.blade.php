@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Movies Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Movies</li>
        </ol>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Edit Data
        </div>
        <div class="card-body">
            <form method="POST" action="/movies/{{ $movie->id }}">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="judul" class="form-label">Title:</label>
                    <input type="text" id="judul" name="judul" class="form-control" value="{{ $movie->judul }}">
                </div>

                <div class="mb-3">
                    <label for="poster" class="form-label">Poster:</label>
                    <input type="text" id="poster" name="poster" class="form-control" value="{{ $movie->poster }}">
                </div>

                <div class="mb-3">
                    <label for="genre_id" class="form-label">Genre:</label>
                    <select id="genre_id" name="genre_id" class="form-select">
                        @foreach ($genres as $genre)
                            <option value="{{ $genre->id }}" {{ $genre->id == $movie->genre_id ? 'selected' : '' }}>
                                {{ $genre->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="country_id" class="form-label">Country:</label>
                    <select id="country_id" name="country_id" class="form-select">
                        @foreach ($countries as $country)
                            <option value="{{ $country->id }}" {{ $country->id == $movie->country_id ? 'selected' : '' }}>
                                {{ $country->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="tahun" class="form-label">Year:</label>
                    <input type="text" id="tahun" name="tahun" class="form-control" value="{{ $movie->tahun }}">
                </div>

                <div class="mb-3">
                    <label for="rating" class="form-label">Rating:</label>
                    <input type="text" id="rating" name="rating" class="form-control" value="{{ $movie->rating }}">
                </div>

                <button type="submit" class="btn btn-primary">Update Movie</button>
            </form>
        </div>
    </div>
@endsection
