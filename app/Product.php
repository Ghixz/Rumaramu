<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // protected $table = 'products';
    protected $fillable =['nama', 'kategori', 'deskripsi', 'harga', 'gambar'];
}
