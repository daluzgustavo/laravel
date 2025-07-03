<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['content', 'user_id', 'post_id'];

    public function user() : BelongsTo {
        return $this->belongsTo(User::class)
    }

    public function post() : BelongsTo {
        return $this->belongsTo(Post::class)
    }
}
