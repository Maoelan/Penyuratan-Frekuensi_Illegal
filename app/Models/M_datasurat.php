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
        'nik_pemeriksa',
        'jenis_kelamin_pemeriksa',
        'agama_pemeriksa',
        'pekerjaan_pemeriksa',
        'jabatan_pemeriksa',
        'pangkat_gol',
        'alamat_pemeriksa',
        'bertindak_untuk_pemeriksa',
        'nama_kbalai',
        'nip_kbalai',
        'tanggal_now'
    ];

    protected $hidden;
}
