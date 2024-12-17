<?php

namespace App\Http\Controllers;
use App\Models\Siswa;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index() {
        return view('terimaDataWith')->with(
            [
                'nama' => "Ahmad Istakim"
            ]
        );
    }
}
