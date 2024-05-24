<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasienController extends Controller
{
    // Metode untuk mengelola data pasien
    public function index()
    {
        return view('pasien.index');
    }

    public function create()
    {
        return view('pasien.create');
    }

    public function store(Request $request)
    {
        // Logika untuk menyimpan data pasien
    }

    public function show($id)
    {
        // Logika untuk menampilkan detail pasien
    }

    public function edit($id)
    {
        return view('pasien.edit');
    }

    public function update(Request $request, $id)
    {
        // Logika untuk memperbarui data pasien
    }

    public function destroy($id)
    {
        // Logika untuk menghapus data pasien
    }
}
