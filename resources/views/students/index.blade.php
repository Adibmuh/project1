@extends('Baru/main')


@section('title', 'Daftar Murid')

@section('container')


<div class="container">
    <div class="row">
        <div class="col-5">
            <h1 class="mt-3">Hello, Dunia!</h1>

            <a href="/students/create" class="btn btn-primary my-5">Tambah Data Murid</a>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                
            @endif

            <ul class="list-group">
                @foreach ($students as $student)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      {{$student->nama}}
                        <a href="/students/{{ $student->id }}" class="badge bg-primary rounded-pill badge-info">detail</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

@endsection;

