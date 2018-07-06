<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookPage extends Model
{
    protected $table = 'book_pages';
	
    protected $fillable = [
        'name', 
        'content', 
        'number_page', 
        'book_id',
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
