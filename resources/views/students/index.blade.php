@extends('layouts/main')

@section('title', 'Daftar Mahasiswa')

@section('container')
    <div class="container mt-5">
        <h1>Daftar Mahasiswa</h1>

        <div class="row mt-3">
            <div class="col-md-6">
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