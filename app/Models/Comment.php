<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'content',
        'review_id',
        'user_id',
    ];

    public function review()
    {
        return $this->belongsTo(Review::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
