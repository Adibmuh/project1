@extends('Baru/main')


@section('title', 'Daftar Murid')

@section('container')


<div class="container">
    <div class="row">
        <div class="col-5">
            <h1 class="mt-3">Hello, Dunia!</h1>

            <ul class="list-group">
                @foreach ($students as $student)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      {{$student->nama}}
                        <a href="" class="badge bg-primary rounded-pill badge-info">detail</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

@endsection;

