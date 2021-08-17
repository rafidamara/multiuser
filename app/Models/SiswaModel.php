<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaModel extends Model
{
    public $table = "siswa";

    public $timestamps = false;
    
    protected $fillable = [
        'nisn', 'nama_siswa', 'nomer_hp', 'photo', 'tingkat', 'jurusan', 'kelas', 'email', 'password' 
    ];
}
