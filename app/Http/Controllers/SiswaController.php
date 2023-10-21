<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = [
            [
                'nama' => 'Awal',
                'umur' => 18,
                'alamat' => 'Unib Belakang',
            ],
            [
                'nama' => 'Bisa',
                'umur' => 18,
                'alamat' => 'Jl. Contoh No. 456',
            ],
            [
                'nama' => 'Cari',
                'umur' => 18,
                'alamat' => 'Jl. Contoh No. 441',
            ],
            [
                'nama' => 'Doni',
                'umur' => 17,
                'alamat' => 'Jl. Contoh No. 490',
            ],
            [
                'nama' => 'Eya',
                'umur' => 18,
                'alamat' => 'Jl. Contoh No. 455',
            ],
            // Tambahkan data siswa lainnya
        ];

        return view('siswa.index', ['siswa' => $siswa]);
    }
}
