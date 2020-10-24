@extends('layouts.main')

@section('title', 'Data Teacher')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class=>Data Teacher</h1>

            <a href="/teachers/create" class="btn btn-primary my-3">Tambah Data Teacher</a>
            
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <ul class="list-group">
                @foreach( $teachers as $teacher )
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $teacher->nama }}
                        <a href="/teachers/{{ $teacher->id }}" class="badge badge-info">detail</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection