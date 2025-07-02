@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Detail Mahasiswa</h1>

    <div class="card">
        <div class="card-body">
            <p><strong>Nama:</strong> {{ $mahasiswa->nama }}</p>
            <p><strong>NIM:</strong> {{ $mahasiswa->nim }}</p>
            <p><strong>Jurusan:</strong> {{ $mahasiswa->jurusan }}</p>
            <p><strong>Email:</strong> {{ $mahasiswa->email }}</p>
        </div>
    </div>

    <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary mt-3">Kembali</a>
@endsection
