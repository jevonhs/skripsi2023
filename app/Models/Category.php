<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;
    protected $table = "categories";
    protected $fillable = ['id', 'nama'];
    
    public function produk()
    {
        return $this->hasMany(Produk::class, "category_id");
    }

}
