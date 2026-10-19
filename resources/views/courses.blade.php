@extends('layouts.base')

@section('title', 'Courses')

@section('content')
    <h3>Courses</h3>
    <table class="table table-bordered table-striped">
        <thead class="table-dark"><tr><th>Kode</th><th>Mata Kuliah</th><th>SKS</th></tr></thead>
        <tbody>
            <tr><td>TI0123</td><td>Pemrograman Web Lanjut</td><td>3</td></tr>
            <tr><td>TI0124</td><td>Basis Data</td><td>3</td></tr>
            <tr><td>TI0125</td><td>Jaringan Komputer</td><td>3</td></tr>
        </tbody>
    </table>
@endsection
