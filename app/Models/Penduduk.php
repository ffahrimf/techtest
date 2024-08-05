<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;
    protected $table = 't_penduduk';
    protected $primaryKey = 'nik';
    public $incrementing = false; 
    protected $keyType = 'string'; 
    public $timestamps = true;

    protected $fillable = [
        'nik',
        'no_kk',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'rt',
        'rw',
        'dusun',
        'agama',
        'status_perkawinan',
        'pendidikan',
        'pekerjaan',
        'golongan_darah',
        'shdk',
        'ayah',
        'ibu',
        'kepala_keluarga'
    ];
}
