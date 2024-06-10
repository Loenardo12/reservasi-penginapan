<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Barryvdh\DomPDF\Facade\Pdf;

class Category extends Model
{

    use HasFactory;
    protected $table = 'categories';
    protected $primaryKey = 'id_categories';
    public $incrementing = true;
    protected $fillable = ['nama', 'harga', 'deskripsi','gambar'];
    public $timestamps = false;

      public function transaction()
    {
        return $this->hasMany(Transaction::class, 'category_id', 'id_categories');
    }

}