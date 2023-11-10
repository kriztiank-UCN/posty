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

    // if the user_id is in the likes for this post, return true else false
    public function likedBy(User $user)
    {
        return $this->likes->contains('user_id', $user->id);
    }

    public function user()
    {
        // relation post belongs to a user
        return $this->belongsTo(User::class);
    }

    public function likes()
    {
        // relation post has many likes
        return $this->hasMany(Like::class);
    }
}
