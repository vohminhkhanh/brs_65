<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'content', 
        'rating',
        'user_id',
        'book_id',
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
