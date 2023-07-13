@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Reviews Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Reviews</li>
        </ol>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Reviews Data
        </div>
        <div class="card-body">
            <form method="POST" action="/reviews">
                @csrf
                <div class="form-group">
                    <label for="movie_id">Movie:</label>
                    <select id="movie_id" name="movie_id" class="form-control">
                        @foreach ($movies as $movie)
                            <option value="{{ $movie->id }}">{{ $movie->judul }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="user">User:</label>
                    <select id="user" name="user" class="form-control">
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="rating">Rating:</label>
                    <input type="text" id="rating" name="rating" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="review">Review:</label>
                    <input type="text" id="review" name="review" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="tanggal">Tanggal:</label>
                    <input type="date" id="tanggal" name="tanggal" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
@endsection
