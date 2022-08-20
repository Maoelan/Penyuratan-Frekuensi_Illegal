<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class M_tms extends Model
{
    use softDeletes;

    protected $table = "tms";
    protected $fillable = [
        
        'id',
        'tanggal_pemeriksaan',
        'metode_pemeriksaan',
        'client_name',
        'kategori_pengguna',
        'merk_perangkat',
        'tipe_perangkat',
        'no_seri',
        'no_sertifikat',
        'jenis_perangkat',
        'status',
        'keterangan'
    ];

    protected $hidden;
}
