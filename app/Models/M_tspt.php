<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class M_tspt extends Model
{
    use softDeletes;

    protected $table = "tspt";
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
        'nomer_beroperasi',
        'mulai_beroperasi',
        'keterangan'
    ];

    protected $hidden;
}
