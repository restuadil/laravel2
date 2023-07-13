@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Movies Data</h1>
    <div class="d-flex justify-content-between align-items-center mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Movies</li>
        </ol>
        <a href="/movies/create" class="btn btn-success">Create Data</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Movies Data
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatablesSimple" class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Poster</th>
                            <th>Genre</th>
                            <th>Negara</th>
                            <th>Tahun</th>
                            <th>Rating</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Poster</th>
                            <th>Genre</th>
                            <th>Negara</th>
                            <th>Tahun</th>
                            <th>Rating</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($movies as $movie)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $movie->judul }}</td>
                                <td>
                                    <img src="{{ $movie->poster }}" alt="Poster" class="img-fluid"
                                        style="max-width: 100px;">
                                </td>
                                <td>{{ $movie->genre->nama }}</td>
                                <td>{{ $movie->country->name }}</td>
                                <td>{{ $movie->tahun }}</td>
                                <td>{{ $movie->rating }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="/movies/{{ $movie->id }}/edit" class="btn btn-warning">Edit</a>
                                        <form action="/movies/{{ $movie->id }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Apakah anda yakin ingin menghapus?')">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
