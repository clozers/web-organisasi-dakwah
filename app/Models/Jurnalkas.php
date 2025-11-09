<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JurnalKas extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'keterangan',
        'petugas',
        'nominal',
        'jenis_transaksi_id',
        'metode',
    ];

    public function jenisTransaksi()
    {
        return $this->belongsTo(JenisTransaksi::class, 'jenis_transaksi_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'petugas');
    }
}
