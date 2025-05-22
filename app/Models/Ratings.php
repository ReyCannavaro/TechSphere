<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ratings extends Model
{
    use HasFactory;
    protected $table = 'ratings';
    protected $fillable = ['users_id', 'gadgets_id', 'rating', 'comment'];
}
