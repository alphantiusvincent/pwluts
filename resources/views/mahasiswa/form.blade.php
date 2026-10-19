@extends('layouts.base')

@section('title', 'Form Mahasiswa')

@section('content')
    <h3>Form Data Mahasiswa</h3>

    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf {{-- wajib untuk POST, kalau tidak: error 419 Page Expired --}}

        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" name="nim" id="nim" value="{{ old('nim') }}"
                   class="form-control @error('nim') is-invalid @enderror">
            @error('nim') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" id="nama" value="{{ old('nama') }}"
                   class="form-control @error('nama') is-invalid @enderror">
            @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
@endsection
