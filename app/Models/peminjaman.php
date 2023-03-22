<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    use HasFactory;

    protected $table = "peminjaman";
    protected $fillable = [
        'Kode_Member',
        'Kode_Buku',
        'Tanggal_Pinjam',
        'Tanggal_Kembali'
    ];

    protected $guarded = [
        'Kode_Pinjam',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'Kode_Pinjam';
}