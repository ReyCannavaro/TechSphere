<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
    use HasFactory;

    protected $table = 'ratings';

    protected $fillable = [
        'users_id',
        'gadgets_id',
        'rating',
        'comment',
    ];

    // Relasi ke model User
public function user()
{
    return $this->belongsTo(User::class, 'users_id');
}

public function gadget()
{
    return $this->belongsTo(Gadget::class, 'gadgets_id');
}

}
