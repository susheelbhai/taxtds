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
        $data = array(
            array('name'=> 'dummy', 'href'=> 'https://www.cbic.gov.in/', 'image'=>'1.jpg'),
            array('name'=> 'dummy', 'href'=> 'https://gstcouncil.gov.in/', 'image'=>'2.jpg'),
            array('name'=> 'dummy', 'href'=> 'https://services.gst.gov.in/services/', 'image'=>'3.jpg'),
            array('name'=> 'dummy', 'href'=> 'https://www.mca.gov.in/content/mca/global/en/home.html', 'image'=>'4.jpg'),
            array('name'=> 'dummy', 'href'=> 'https://www.incometaxindiaefiling.gov.in/', 'image'=>'5.jpg'),
            array('name'=> 'dummy', 'href'=> 'https://www.icsi.edu/home/', 'image'=>'6.jpg'),
            array('name'=> 'dummy', 'href'=> 'https://icmai.in/icmai/index.php', 'image'=>'7.jpg'),
            array('name'=> 'dummy', 'href'=> 'https://www.icai.org/', 'image'=>'8.jpg'),
        );

        ImportantLink::insert($data);
    }
}
