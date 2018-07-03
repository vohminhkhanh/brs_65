<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Category::class, 4)->create()->each(function ($categoryParent) {
            factory(App\Models\Category::class, 2)->create([
                'parent_id' => $categoryParent->id,
            ]);
        });
    }
}
