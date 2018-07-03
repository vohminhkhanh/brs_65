<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'image' => $faker->image,
        'birthday' => $faker->dateTime,
        'address' => $faker->address,
        'gender' => $faker->boolean,
        'email' => $faker->unique()->email,
        'password' => $faker->password,
        'hidden' => $faker->boolean,
        'user_role' => $faker->boolean,
    ];
});
$factory->define(App\Models\Book::class, function (Faker $faker) {
    $title = $faker->sentence(4);

    return [
        'name' => $title,
        'image' => $faker->imageUrl($width = 300, $height = 400 ),
        'introduce' => $faker->text(200),
        'slug' => str_slug($title),
        'publisher' => $faker->name,
        'author' => $faker->name,
        'publication_date' => $faker->dateTime,
        'page_number' => rand(20,30),
        'average_rating' => rand(1,5),
        'status' => $faker->boolean,
        'hidden' => $faker->boolean,
    ];
});

$factory->define(App\Models\Review::class, function (Faker $faker) {
    return [
        'rating' => rand(1,5),
        'content' => $faker->text(20),
        'book_id' => App\Models\Book::all()->random()->id,
        'user_id' => App\Models\User::all()->random()->id,
    ];
});

$factory->define(App\Models\Category::class, function (Faker $faker) {
    $name = $faker->word;

    return [
        'name' => $name,
        'slug' => str_slug($name),
        'parent_id' => 0,
    ];
});

$factory->define(App\Models\Comment::class, function (Faker $faker) {
    return [
        'content' => $faker->text(200),
        'review_id' => rand(1,20),
        'user_id' => rand(1,20),
    ];
});

$factory->define(App\Models\Favorite::class, function (Faker $faker) {
    return [
        'status' => $faker->boolean,
        'book_id' => rand(1,20),
        'user_id' => rand(1,20),
    ];
});

$factory->define(App\Models\Follow::class, function (Faker $faker) {
    return [
        'follow_id' => rand(1,20),
        'user_id' => rand(1,20),
    ];
});

$factory->define(App\Models\Like::class, function (Faker $faker) {
    return [
        'status' => $faker->boolean,
        'review_id' => rand(1,20),
        'user_id' => rand(1,20),
    ];
});

$factory->define(App\Models\Slide::class, function (Faker $faker) {
    return [
    	'image' => $faker->imageUrl($width = 300, $height = 400 ),
    	'name' => $faker->name,
        'content' => $faker->text(200),
        'link' => $faker->text(200),
    ];
});

$factory->define(App\Models\BookCategory::class, function (Faker $faker) {
    return [
        'book_id' => App\Models\Book::all()->random()->id,
        'category_id' => App\Models\Category::where('parent_id', '<>', 0)->get()->random()->id,
    ];
});

$factory->define(App\Models\BookPage::class, function (Faker $faker) {
    return [
        'content' => $faker->text(200),
        'number_page' => rand(1,20),
        'book_id' => rand(1,20),
    ];
});
