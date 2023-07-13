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
            Country Data
        </div>
        <div class="card-body">
            <form method="POST" action="/countries">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Country:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
@endsection
