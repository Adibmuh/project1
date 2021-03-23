@extends('Baru/main')


@section('title', 'Tambah Form Data Murid')

@section('container')


<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Tambah Data Murid</h1>

            <form method="post" action="/students">  
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
                </div>
                <div class="mb-3">
                    <label for="nrp" class="form-label">Nrp</label>
                    <input type="text" class="form-control" id="nrp" placeholder="Masukkan nrp" name="nrp">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Masukkan email" name="email">
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" placeholder="Masukkan jurusan" name="jurusan">
                </div>

                <button type="submit" class="btn btn-primary">Tambah Data!</button>
            </form>    
            
        </div>
    </div>
</div>

@endsection;

