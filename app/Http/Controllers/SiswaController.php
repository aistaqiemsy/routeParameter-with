<?php

namespace App\Http\Controllers;

class SiswaController extends Controller
{
    public function index() { 
        return view('terimaDataWith', [
            'nama' => "Ahmad Istakim",
            'kelas' => "IX"
        ]);
    }

    public function indexArray() { // menggunakan array
        return view('terimaData', [
            'nama' => "Ahmad Istakim",
            'kelas' => "XI Pengembangan Perangkat Lunak dan Gim",
            'jurusan' => "PPLG/RPL"
        ]);
    }
}
