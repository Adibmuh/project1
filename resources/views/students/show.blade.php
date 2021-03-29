@extends('Baru/main')


@section('title', 'Detail Murid')

@section('container')


<div class="container">
    <div class="row">
        <div class="col-5">
            <h1 class="mt-3">Hello, Dunia!</h1>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$student->nama}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$student->nrp}}</h6>
                <p class="card-text">{{$student->email}}</p>
                <p class="card-text">{{$student->jurusan}}</p>

                <a href="{{ $student->id }}/edit" class="btn btn-primary">edit</a>

                {{-- @method digunakan untuk mengelabuhi method yang ada di dalam form
                    @csrf agar source aman --}}
                <form action="/students/{{ $student->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf 
                    <button type='submit' class="btn btn-danger">delete</button>
                </form>
                <a href="/students" class="card-link">Kembali</a>
            </div>
        </div>

        </div>
    </div>
</div>

@endsection;

