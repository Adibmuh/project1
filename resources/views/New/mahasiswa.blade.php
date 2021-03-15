@extends('Baru/main')


@section('title', 'Daftar Mahasiswa')

@section('container')


<div class="container">
    <div class="row">
        <div class="col-15">
            <h1 class="mt-3">Hello, Dunia!</h1>


            <table class='table'>
                <thead class='table table-dark table-hover'>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NRP</th>
                        <th scope="col">Email</th>
                        <th scope="col">jurusan</th>
                        <th scope="col">aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $mahasiswa as $mhs )
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $mhs->nama }}</td>
                        <td>{{ $mhs->nrp }}</td>
                        <td>{{ $mhs->email }}</td>
                        <td>{{ $mhs->jurusan }}</td>
                        <td>
                            <a href="" class="badge badge-success">edit</a>
                            <a href="" class="badge badge-danger">delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection;