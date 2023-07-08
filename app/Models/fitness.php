<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fitness extends Model
{
    use HasFactory;
    protected $fillable = ['nama_suplemen', 'harga', 'isi', 'protein', 'gula', 'kalori', 'image','info'];
    protected $table = 'fitness';
}
