<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategoris';
    protected $primaryKey = 'id_categories';
    public $incrementing = true;
    protected $fillable = ['gambar', 'nama', 'deskripsi','harga'];
    public $timestamps = false;
    
    public function informasi()
    {
        return $this->hasMany(Informasi::class, 'category_id', 'id_categories');
    }
}