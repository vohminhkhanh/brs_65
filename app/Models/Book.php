<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'name', 
        'image', 
        'introduce', 
        'slug', 
        'publisher', 
        'author', 
        'publication_date', 
        'average_rating', 
        'status', 
        'hidden',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'book_category', 'book_id', 'category_id');
    }
    
    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }

    public function histories()
    {
        return $this->hasMany(History::class);
    }

    public function pages()
    {
        return $this->hasMany(BookPage::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    } 

    public function likes()
    {
        return $this->hasManyThrough(Like::class, Review::class, 'book_id', 'review_id', 'id');
    }
    
    public function comments()
    {
        return $this->hasManyThrough(Comment::class, Review::class, 'book_id', 'review_id', 'id');
    }
}
