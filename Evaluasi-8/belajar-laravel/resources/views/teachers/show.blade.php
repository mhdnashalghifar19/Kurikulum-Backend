@extends('layouts.main')

@section('title', 'Detail Teacher')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class=>Detail Teacher</h1>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $teacher->nama }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $teacher->nrp }}</h6>
                    <p class="card-text">{{ $teacher->email }}</p>
                    <p class="card-text">{{ $teacher->jurusan }}</p>

                    <a href="{{ $teacher->id }}/edit" class="btn btn-primary">Edit</a>

                    <form action="/teachers/{{ $teacher->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="/teachers" class="card-link">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection