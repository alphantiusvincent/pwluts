<?php

namespace App\Http\Controllers;

use App\Models\Sale;

class SaleController extends Controller
{
    // Menampilkan seluruh data tabel dalam bentuk JSON (tanpa view)
    public function index()
    {
        return response()->json(Sale::with(['customer', 'item.company'])->get());
    }

    // Menampilkan satu data berdasarkan primary key
    public function show($id)
    {
        return response()->json(Sale::with(['customer', 'item.company'])->findOrFail($id));
    }
}
