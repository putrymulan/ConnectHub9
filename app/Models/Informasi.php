<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    use HasFactory;
    protected $table = 'informasis';
    protected $fillable = ['nama', 'nomorhp', 'kategori','category_id', 'seat', 'harga', 'status'];
   
    public function kategori()
    {
        return $this->belongsTo(Kategori::class,'category_id','id_categories');
    }
}
