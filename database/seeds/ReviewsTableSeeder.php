<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = App\Models\Book::all();
        
        foreach($book as $b)
        {
	        factory(App\Models\Review::class,1)->create([
	            'rating' => $b->average_rating,
	        ]);
        }
    }
}
