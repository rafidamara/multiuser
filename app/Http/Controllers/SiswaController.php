<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\SiswaModel;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = DB::table('siswa')->paginate(3);
        return view('data_siswa/siswa', ['siswa' => $siswa]);
    }

    public function search(Request $request) {
        $search = $request->input('keyword');
        $siswa = SiswaModel::query()->where('nisn', 'LIKE', "%{$search}%")
                                    ->orWhere('nama_siswa', 'LIKE', "%{$search}%")
                                    ->orWhere('nomer_hp', 'LIKE', "%{$search}%")
                                    ->orWhere('tingkat', 'LIKE', "%{$search}%")
                                    ->orWhere('jurusan', 'LIKE', "%{$search}%")
                                    ->orWhere('kelas', 'LIKE', "%{$search}%")
                                    ->orWhere('email', 'LIKE', "%{$search}%")
                                    ->get();
        
        return view('data_siswa/siswa', ['siswa' => $siswa]);
    }

    public function create()
    {
        return view('data_siswa/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nisn' => 'required',
            'nama_siswa' => 'required',
            'nomer_hp' => 'required',
            'photo' => 'required',
            'tingkat' => 'required',
            'jurusan' => 'required',
            'kelas' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $siswa = new SiswaModel();
        $siswa->id_siswa = Str::uuid();
        $siswa->nisn = $request->nisn;
        $siswa->nama_siswa = $request->nama_siswa;
        $siswa->nomer_hp = $request->nomer_hp;

        if($request->hasFile("photo")) {
            $photo = $request->file('photo');
            $filename = Str::uuid() . '.' . $photo->getClientOriginalExtension();
            $photo->move(public_path('photo'), $filename);
            $siswa->photo = $filename;
        }

        $siswa->tingkat = $request->tingkat;
        $siswa->jurusan = $request->jurusan;
        $siswa->kelas = $request->kelas;
        $siswa->email = $request->email;
        $siswa->password = Hash::make($request->password);
        $siswa->save();

        return redirect('siswa')->with('alert','siswa baru berhasil ditambahkan');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $siswa = SiswaModel::where('id_siswa', $id)->first();
        return view('data_siswa/edit', ['siswa' => $siswa]);
    }

    public function update(Request $request, $id)
    {
        if ($request->photo) {
            $foto = $request->photo;
            $new_foto = date('YmdHis').'.'.$foto->getClientOriginalExtension();
            $foto->move('photo/', $new_foto);

            // $foto = $request->photo;
            // $new_foto = date('YmdHis').'.'.$foto->getClientOriginalExtension();
            // $foto->move('photo/', $new_foto);

            // $foto = $request->photo;
            // $filename = $request->photo->getClientOriginalName();
            // $extension = $request->photo->getClientOriginalExtension();
            // $fileName = str_random(5)."-".date('his')."-".str_random(3).".".$extension;
            // $destinationPath = 'photo/';
            // $file->move($destinationPath, $fileName);
        }else{
            $old_foto = SiswaModel::where('id_siswa', $id)->get('photo');
            foreach ($old_foto as $get) { $old = $get->photo; };
            
            $new_foto = $old;
        }
            
        SiswaModel::where('id_siswa', $id)->update([
            'nisn' => $request->nisn,
            'nama_siswa' => $request->nama_siswa,
                'nomer_hp' => $request->nomer_hp,
                'kelas' => $request->kelas,
                'tingkat' => $request->tingkat,
                'jurusan' => $request->jurusan,
                'kelas' => $request->kelas,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'photo' => $new_foto,
        ]);

        return redirect('siswa')->with('alert', 'Update data kelas berhasil');
    }

    public function destroy($id)
    {
        SiswaModel::where('id_siswa', $id)->delete();
        return redirect()->back()->with('alert', 'Berhasil menghapus kelas');
    }
}
