<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gadgets extends Model
{
    use HasFactory;

    protected $table = 'gadgets'; // Sesuaikan dengan nama tabel di database
    protected $fillable = ['id', 'name', 'categories_id', 'harga', 'description', 'image']; // Sesuaikan dengan kolom di database
}
    