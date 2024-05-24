<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        // Menyediakan data (opsional)
        $data = [
            ['name' => 'John Doe', 'email' => 'john@example.com'],
            ['name' => 'Jane Doe', 'email' => 'jane@example.com'],
        ];
        
        // Mengembalikan view pegawai.index dengan data
        return view('pegawai.index', ['pegawais' => $data]);
    }

    public function create()
    {
        // Mengembalikan view untuk form input pegawai baru
        return view('pegawai.create');
    }

    public function store(Request $request)
    {
        // Proses penyimpanan data pegawai baru (contoh sederhana)
        $name = $request->input('name');
        $email = $request->input('email');

        // Kode penyimpanan ke database di sini (contoh ini hanya menampilkan kembali data)
        return redirect()->route('pegawai.index')->with('success', 'Pegawai baru ditambahkan: ' . $name);
    }
}
