<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;
    protected $table = "pembelians";
    protected $fillable=['penerima','alamat','bukti_bayar','user_id', 'status', 'tanggal', 'jumlah_harga',];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function pembelian_detail()
    {
        return $this->hasMany(PembelianDetail::class, 'pembelian_id', 'id');
    }
}
