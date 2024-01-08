<?php
// File: app/Models/JadwalKonsultasi.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalKonsultasi extends Model
{
    use HasFactory;

    protected $table = 'jadwal_konsultasi'; // Sesuaikan dengan nama tabel di database
    protected $primaryKey = 'id_jadwal'; // Ganti ini dengan nama kolom kunci utama sesuai kebutuhan
    protected $fillable = [
        'id_jadwal',
        'nama_murid',
        'waktu_konsultasi',
        'keterangan',
    ];

    public $timestamps = false; // Tambahkan ini untuk menonaktifkan timestamp
}