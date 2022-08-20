<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class M_tmisr extends Model
{
    use softDeletes;

    protected $table = "tmisr";
    protected $fillable = [
        
        'id',
        'tanggal_pemeriksaan',
        'metode_pemeriksaan',
        'client_id',
        'client_name',
        'nama_stasiun',
        'alamat_stasiun',
        'koordinat',
        'stasiun_lawan',
        'tx',
        'rx',
        'bw',
        'status',
        'keterangan'
    ];

    protected $hidden;
}
