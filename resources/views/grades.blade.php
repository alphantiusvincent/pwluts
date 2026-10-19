@extends('layouts.base')

@section('title', 'Grades')

@section('content')
    <h3>Grades</h3>
    <table class="table table-bordered table-striped">
        <thead class="table-dark"><tr><th>NIM</th><th>Mata Kuliah</th><th>Nilai</th></tr></thead>
        <tbody>
            <tr><td>71230967</td><td>Pemrograman Web Lanjut</td><td>A</td></tr>
            <tr><td>71230001</td><td>Basis Data</td><td>B+</td></tr>
            <tr><td>71230002</td><td>Jaringan Komputer</td><td>A-</td></tr>
        </tbody>
    </table>
@endsection
