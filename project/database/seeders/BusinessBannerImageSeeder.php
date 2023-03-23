<?php

namespace Database\Seeders;

use App\Models\BusinessBannerImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusinessBannerImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $business_banner_images = array(
            array('id' => '1','created_at' => '2023-03-21 09:41:56','updated_at' => '2023-03-21 09:41:56','business_id' => '14','name' => '64197be451339.jpg'),
            array('id' => '2','created_at' => '2023-03-22 07:27:52','updated_at' => '2023-03-22 07:27:52','business_id' => '13','name' => '641aadf77eb0c.jpg')
          );

          BusinessBannerImage::insert($business_banner_images);
          
    }
}
