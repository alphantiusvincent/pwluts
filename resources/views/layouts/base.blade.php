<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'UTS PWL') - Grup A</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .box { border: 1px solid #333; }
        .area-tengah { min-height: 400px; }
    </style>
</head>
<body>
<div class="container my-3">

   
    <div class="row">
        <div class="col-md-7 box p-3 bg-primary text-white">
            <h4 class="m-0">Sistem Akademik</h4>
        </div>
        <div class="col-md-5 box p-3 bg-primary text-white text-md-end">
            @yield('right_header', 'UTS Pemrograman Web Lanjut')
        </div>
    </div>

   
    <div class="row area-tengah">


        <div class="col-md-3 box p-3 bg-light">
            <h6 class="text-uppercase text-muted">Menu</h6>
            <nav class="nav nav-pills flex-column">
                <a class="nav-link {{ request()->routeIs('courses') ? 'active' : '' }}" href="{{ route('courses') }}">Courses</a>
                <a class="nav-link {{ request()->routeIs('students') ? 'active' : '' }}" href="{{ route('students') }}">Students</a>
                <a class="nav-link {{ request()->routeIs('grades') ? 'active' : '' }}" href="{{ route('grades') }}">Grades</a>
                <a class="nav-link {{ request()->routeIs('assignments') ? 'active' : '' }}" href="{{ route('assignments') }}">Assignments</a>
                <hr>
                <a class="nav-link {{ request()->routeIs('mahasiswa.*') ? 'active' : '' }}" href="{{ route('mahasiswa.create') }}">Form Mahasiswa</a>
            </nav>
        </div>

       
        <div class="col-md-6 box p-3">
            @yield('content')
        </div>

    
        <div class="col-md-3 box p-3 bg-light">
            @section('right_nav')
                <h6 class="text-uppercase text-muted">Info</h6>
                <p class="small mb-0">Tanggal: {{ now()->format('d M Y') }}</p>
            @show
        </div>
    </div>

    {{-- ===== FOOTER ===== --}}
    <div class="row">
        <div class="col-12 box p-2 text-center bg-dark text-white">
            &copy; {{ date('Y') }} Prodi Informatika UKDW
        </div>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
