<?php

namespace App\Http\Controllers;

use App\Models\Item;

class ItemController extends Controller
{
    // Menampilkan seluruh data tabel dalam bentuk JSON (tanpa view)
    public function index()
    {
        return response()->json(Item::with('company')->get());
    }

    // Menampilkan satu data berdasarkan primary key
    public function show($id)
    {
        return response()->json(Item::with('company')->findOrFail($id));
    }
}
