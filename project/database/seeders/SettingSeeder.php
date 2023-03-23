<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = array(
            array('id' => '1','created_at' => '2023-02-03 10:07:56','updated_at' => '2023-03-21 12:51:24','app_name' => 'TaxTDS','favicon' => '641020fbc69ef.png','dark_logo' => '641020a0b5126.png','light_logo' => '641020a0b5731.png','title' => 'Dummy','address' => 'Dummy','detailed_address' => 'Dummy','email' => 'example@email.com','phone' => 'Dummy','short_description' => 'Taxtds is designed specifically to bridge the gap & break the geographical boundaries between the Tax and Finance professionals & customer around the world in relation to tax/finance services in safe & secure manner.','facebook' => 'Dummy','instagram' => 'Dummy','linkedin' => 'Dummy','twitter' => 'Dummy','google_map' => 'Dummy','whatsapp' => 'Dummy','admin_theme' => 'theme1','user_theme' => 'theme2','partner_theme' => 'theme1','color1' => '#01a0e4','color2' => '#f5f6ff','color3' => 'red')
          );
        \App\Models\Setting::insert($settings);
    }
}
