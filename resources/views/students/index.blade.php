@extends('layouts/main')

@section('title', 'Daftar Mahasiswa')

@section('container')
    <div class="container mt-5">
        
        
        <div class="row mt-3">
            <div class="col-md-6">
                <h1>Daftar Mahasiswa</h1>
                
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <a href="{{ url('/students/create') }}" class="btn btn-primary mt-3">Tambah data mahasiswa</a>
                
                <ul class="list-group">
                    @foreach ($students as $student)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $student->nama }}
                            <a href="{{ url('/students/' . $student->id) }}" class="badge badge-info">detail</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection