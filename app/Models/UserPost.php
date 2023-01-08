<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'user_id',
        'type'
    ];

    public function post() {
        return $this->hasOne(Post::class, 'id', 'post_id')->first();
    }
}
