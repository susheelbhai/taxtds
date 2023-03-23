<?php

namespace Database\Seeders;

use App\Models\BusinessReview;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusinessReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $business_reviews = array(
            array('id' => '1','created_at' => '2023-03-21 09:42:57','updated_at' => '2023-03-21 09:42:57','business_id' => '14','name' => 'Hemant Kumar','email' => 'hemant875@gmail.com','phone' => '8285565503','images' => NULL,'rating' => NULL,'review' => 'Nice')
          );
        BusinessReview::insert($business_reviews);
    }
}
