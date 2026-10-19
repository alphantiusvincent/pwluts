<?php

namespace App\Http\Controllers;

use App\Models\Customer;

class CustomerController extends Controller
{
    // Menampilkan seluruh data tabel dalam bentuk JSON (tanpa view)
    public function index()
    {
        return response()->json(Customer::with('sales')->get());
    }

    // Menampilkan satu data berdasarkan primary key
    public function show($id)
    {
        return response()->json(Customer::with('sales')->findOrFail($id));
    }
}
