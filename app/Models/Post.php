<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
    ];

    public function user()
    {
        // relation post belongs to a user
        return $this->belongsTo(User::class);
    }
}
