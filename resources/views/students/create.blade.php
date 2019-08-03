@extends('layouts/main')

@section('title', 'Tambah Mahasiswa')

@section('container')
    <div class="container mt-5">
        <h1>Tambah Data Mahasiswa</h1>

        <div class="row mt-3">
            <div class="col-md-6">
                <form action="{{ url('/students') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan nama" name="nama">
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Masukkan email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="nrp">NRP</label>
                        <input type="number" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="Masukkan nama" name="nrp">
                        @error('nrp')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control" id="jurusan" placeholder="Masukkan jurusan" name="jurusan">
                    </div>
                    <button type="submit" class="btn btn-success">Tambah</button>
                </form>
            </div>
        </div>
    </div>
@endsection