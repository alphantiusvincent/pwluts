@extends('layouts.base')

@section('title', 'Hasil Form')

@section('content')
    <h3>Data Diterima (POST)</h3>
    <table class="table table-bordered">
        <tr><th width="30%">NIM</th><td>{{ $nim }}</td></tr>
        <tr><th>Nama</th><td>{{ $nama }}</td></tr>
    </table>
    <a href="{{ route('mahasiswa.create') }}" class="btn btn-secondary">Kembali</a>
@endsection
