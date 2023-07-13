@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Genres Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Genres</li>
        </ol>
    </div>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Edit Data
        </div>
        <div class="card-body">
            <form method="POST" action="/genres/{{ $genre->id }}">
                @csrf
                @method('PUT')
                <label for="judul">Nama:</label><br>
                <input type="text" id="nama" name="nama" value="{{ $genre->nama }}" required><br><br>

                <label for="poster">Deskripsi:</label><br>
                <input type="text" id="deskripsi" name="deskripsi" value="{{ $genre->deskripsi }}" required><br><br>

                <input type="submit" value="Update Movie">
            </form>
        </div>
    </div>
@endsection