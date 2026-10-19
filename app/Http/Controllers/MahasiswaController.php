<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // GET: tampilkan form
    public function create()
    {
        return view('mahasiswa.form');
    }

    // POST: terima data dari form
    public function store(Request $request)
    {
        $data = $request->validate([
            'nim'  => 'required|digits:8',
            'nama' => 'required|string|max:100',
        ]);

        return view('mahasiswa.hasil', $data);
    }
}
