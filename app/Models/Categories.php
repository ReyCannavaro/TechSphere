<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $table = 'categories'; // Sesuaikan dengan nama tabel di database
    protected $fillable = ['id', 'name']; // Sesuaikan dengan kolom di database
}
