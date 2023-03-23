<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ImportantLink;

class ImportantLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $important_links = array(
            array('id' => '1','created_at' => NULL,'updated_at' => NULL,'href' => 'https://www.cbic.gov.in/','name' => 'dummy','image' => '1.jpg','is_active' => '1'),
            array('id' => '2','created_at' => NULL,'updated_at' => NULL,'href' => 'https://gstcouncil.gov.in','name' => 'dummy','image' => '2.jpg','is_active' => '1'),
            array('id' => '3','created_at' => NULL,'updated_at' => NULL,'href' => 'https://services.gst.gov.in/services/','name' => 'dummy','image' => '3.jpg','is_active' => '1'),
            array('id' => '4','created_at' => NULL,'updated_at' => NULL,'href' => 'https://www.mca.gov.in/content/mca/global/en/home.html','name' => 'dummy','image' => '4.jpg','is_active' => '1'),
            array('id' => '5','created_at' => NULL,'updated_at' => NULL,'href' => 'https://www.incometaxindiaefiling.gov.in/','name' => 'dummy','image' => '5.jpg','is_active' => '1'),
            array('id' => '6','created_at' => NULL,'updated_at' => NULL,'href' => 'https://www.icsi.edu/home/','name' => 'dummy','image' => '6.jpg','is_active' => '1'),
            array('id' => '7','created_at' => NULL,'updated_at' => NULL,'href' => 'https://icmai.in/icmai/index.php','name' => 'dummy','image' => '7.jpg','is_active' => '1'),
            array('id' => '8','created_at' => NULL,'updated_at' => NULL,'href' => 'https://www.icai.org/','name' => 'dummy','image' => '8.jpg','is_active' => '1')
          );

        ImportantLink::insert($important_links);
    }
}
