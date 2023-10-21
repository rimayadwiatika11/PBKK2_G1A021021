<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $buku = [
            ['judul' => 'Merindu Cahaya de Amstel', 'penulis' => 'Arumi E'],
            ['judul' => 'Jangan Mau Jadi Muslimah Dekil', 'penulis' => 'Rina Maruti'],
            ['judul' => 'Hidup Minimalis Ala Rasulullah', 'penulis' => 'Ratnani Latifah'],
            ['judul' => 'Generasi Menulis', 'penulis' => 'Ahmad Rifai Rifan'],
            ['judul' => 'Kitab Anti Malas : Obat Mujarab Untuk Menyembuhkan Kebiasaan', 'penulis' => 'Joko Suprapmanto'],
            // Tambahkan data buku lainnya
        ];

        return view('buku.index', compact('buku'));
    }
}
