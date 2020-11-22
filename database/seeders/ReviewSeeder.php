<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $review = new Review();
      $review->title = "Good book!";
      $review->body = "Great read! Really enjoyed the book, good ending.";
      $review->user_id = 2;
      $review->book_id = 2;
      $review->save();

      $review = new Review();
      $review->title = "Great book!!!";
      $review->body = "Really enjoyed this book, my favourite book!";
      $review->user_id = 1;
      $review->book_id = 3;
      $review->save();

      $review = new Review();
      $review->title = "Alright book";
      $review->body = "Not good, but not bad.";
      $review->user_id = 2;
      $review->book_id = 3;
      $review->save();
    }
}
