<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $fillable=['id','nama_produk','gambar','deskripsi','harga','stok','category_id', 'type', 'usia', 'alergi', 'breed','aktivitas'];

    public function pembeliandetail()
    {
        return $this->hasMany(PembelianDetail::class, 'produk_id', 'id');
    }
    public function carts(){
        return $this->hasMany(Cart::class)->whereNotNull('pembelian_id');
    }
    public function category(){
        return $this->belongsTo(Category::class, "category_id");
    }

}



