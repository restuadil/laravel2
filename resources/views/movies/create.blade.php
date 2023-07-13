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
            Movies Data
        </div>
        <div class="card-body">
            <form method="POST" action="/movies">
                @csrf
                <div class="mb-3">
                    <label for="judul" class="form-label">Title:</label>
                    <input type="text" class="form-control" id="judul" name="judul">
                </div>
                <div class="mb-3">
                    <label for="poster" class="form-label">Poster:</label>
                    <input type="text" class="form-control" id="poster" name="poster">
                </div>
                <div class="mb-3">
                    <label for="genre" class="form-label">Genre:</label>
                    <select class="form-select" id="genre" name="genre_id">
                        @foreach ($genres as $genre)
                            <option value="{{ $genre->id }}">{{ $genre->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="country" class="form-label">Country:</label>
                    <select class="form-select" id="country" name="country_id">
                        @foreach ($countries as $country)
                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tahun" class="form-label">Year:</label>
                    <input type="text" class="form-control" id="tahun" name="tahun">
                </div>
                <div class="mb-3">
                    <label for="rating" class="form-label">Rating:</label>
                    <input type="text" class="form-control" id="rating" name="rating">
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
@endsection
