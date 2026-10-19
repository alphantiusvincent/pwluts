<?php

namespace App\Http\Controllers;

use App\Models\Company;

class CompanyController extends Controller
{
    // Menampilkan seluruh data tabel dalam bentuk JSON (tanpa view)
    public function index()
    {
        return response()->json(Company::with('items')->get());
    }

    // Menampilkan satu data berdasarkan primary key
    public function show($id)
    {
        return response()->json(Company::with('items')->findOrFail($id));
    }
}
