<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\GuruModel;
use App\Models\SiswaModel;
use App\Models\KelasModel;

class HomeController extends Controller {
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    // public function data() {
    //     $guru = GuruModel::count();
    //     $siswa = SiswaModel::count();
    //     $kelas = KelasModel::count();

    //     $percentGuru = $guru / 100;
    //     $percentSiswa = $siswa / 100;
    //     $percentKelas = $kelas / 100;

    //     return view('admin', [
    //                             'guru' => $guru, 
    //                             'siswa' => $siswa,
    //                             'kelas' => $kelas,
    //                             'percentGuru' => $percentGuru,
    //                             'percentSiswa' => $percentSiswa,
    //                             'percentKelas' => $percentKelas]);
    // }
}
