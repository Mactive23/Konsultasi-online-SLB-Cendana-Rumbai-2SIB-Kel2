<?php
// File: app/Models/JadwalKonsultasi.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalKonsultasi extends Model
{
    use HasFactory;

    protected $table = 'jadwal_konsultasi'; // Sesuaikan dengan nama tabel di database

    protected $fillable = [
        'nama_murid',
        'waktu_konsultasi',
        'keterangan',
    ];

    public $timestamps = false; // Tambahkan ini untuk menonaktifkan timestamp
}
