<?php

namespace App\Http\Controllers;
use App\Models\Siswa;

use Illuminate\Http\Request;

class SiswaController extends Controller
{

    public function index() { // menggunakan with
        return view('terimaDataWith')->with(
            [
                'nama' => "Ahmad Istakim",
                'kelas' => "XI",
                'jurusan' => "PPLG"
            ]
        );
    }

    public function indexArray() { // menggunakan array
        return view('terimaData', [
            'nama' => "Ahmad Istakim",
            'kelas' => "XI Pengembangan Perangkat Lunak dan Gim",
            'jurusan' => "PPLG/RPL"
        ]);
    }
}
