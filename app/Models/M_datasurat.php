<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class M_datasurat extends Model
{
    use softDeletes;

    protected $table = "datasurat";
    protected $fillable = [
        
        'id',
        'nama_pemilik',
        'nik_pemilik',
        'jenis_kelamin',
        'agama',
        'pekerjaan',
        'jabatan',
        'alamat',
        'bertindak_untuk',
        'nama_pemeriksa',
        'nip_pemeriksa',
        'nama_kbalai',
        'nip_kbalai'
    ];

    protected $hidden;
}
