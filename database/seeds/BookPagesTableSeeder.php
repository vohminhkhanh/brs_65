<?php

use Illuminate\Database\Seeder;

class BookPagesTableSeeder extends Seeder
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
            for ($i = 1; $i <= $b->page_number; $i++) 
            {
                factory(App\Models\BookPage::class, 1)->create([
                    'book_id' => $b->id,
                    'number_page' => $i,
                ]);
            }
        }
        	
    }
}
