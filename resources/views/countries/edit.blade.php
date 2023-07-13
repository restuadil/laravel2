@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Country Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Country</li>
        </ol>
    </div>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Edit Data
        </div>
        <div class="card-body">
            <form method="POST" action="/countries/{{ $country->id }}">
                @csrf
                @method('PUT')
                <label for="judul">Nama:</label><br>
                <input type="text" id="name" name="name" value="{{ $country->name }}" required><br><br>
                <input type="submit" value="Update Country">
            </form>
        </div>
    </div>
@endsection
