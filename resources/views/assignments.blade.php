@extends('layouts.base')

@section('title', 'Assignments')

@section('content')
    <h3>Assignments</h3>
    <table class="table table-bordered table-striped">
        <thead class="table-dark"><tr><th>Judul</th><th>Mata Kuliah</th><th>Deadline</th></tr></thead>
        <tbody>
            <tr><td>Tugas Routing</td><td>Pemrograman Web Lanjut</td><td>25 Okt 2026</td></tr>
            <tr><td>ERD Perpustakaan</td><td>Basis Data</td><td>28 Okt 2026</td></tr>
            <tr><td>Subnetting</td><td>Jaringan Komputer</td><td>30 Okt 2026</td></tr>
        </tbody>
    </table>
@endsection
