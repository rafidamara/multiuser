<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller {
    public function index()
    {
        $siswa = DB::table('siswa')->paginate(3);
        $kelas = DB::table('kelas')->get();
        $guru = DB::table('guru')->get();
        return view('dashboard.tampil-dashboard', compact('siswa','kelas', 'guru'));
    }
    public function create() {
        //
    }

    public function store(Request $request) {
        //
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        //
    }

    public function update(Request $request, $id) {
        //
    }

    public function destroy($id) {
        //
    }
}
