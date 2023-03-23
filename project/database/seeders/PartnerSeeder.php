<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $partners = array(
            array('partner_id' => '1','created_at' => '2023-03-20 06:45:12','updated_at' => '2023-03-20 06:49:05','name' => 'CA Nagendra Bind','email' => 'hemant875@gmail.com','phone' => '99123464666','profile_pic' => '641801e13ab16.jpg','gender_id' => NULL,'email_verified_at' => NULL,'password' => '$2y$10$pdMWcTtbFbXcUTHnbTlYFeYY21ArKsOhbyl1om9utESP0adoWb5Ra','remember_token' => NULL,'deleted_at' => NULL),
            array('partner_id' => '2','created_at' => '2023-03-21 09:36:36','updated_at' => '2023-03-21 09:48:11','name' => 'CA SACHIN KUMAR','email' => 'del.sachin.75@gmail.com','phone' => NULL,'profile_pic' => '64197d5bcfc76.png','gender_id' => NULL,'email_verified_at' => NULL,'password' => '$2y$10$EOEHlyZttqSpCC7sYhTer.aYYt7OaMzIBzQKU0UAuHQy0KSAysQCC','remember_token' => NULL,'deleted_at' => NULL),
            array('partner_id' => '3','created_at' => '2023-03-23 06:04:38','updated_at' => '2023-03-23 06:04:38','name' => 'Hemant Kumar','email' => 'equitysharecare@gmail.com','phone' => NULL,'profile_pic' => 'dummy.png','gender_id' => NULL,'email_verified_at' => NULL,'password' => '$2y$10$J5Ej.aJPs51cQyjFgLBcKuBr2CaZZQGayROLaVkqyhaOiuhFb/Umy','remember_token' => NULL,'deleted_at' => NULL),
            array('partner_id' => '4','created_at' => '2023-03-23 11:38:34','updated_at' => '2023-03-23 11:38:34','name' => 'Hemant Kumar','email' => 'cmahemantk@gmail.com','phone' => NULL,'profile_pic' => 'dummy.png','gender_id' => NULL,'email_verified_at' => NULL,'password' => '$2y$10$fLDtCCgDthV05mTvksDFyOfaEb4uOrr1oRRVZZhA2e3KPuXcIRLdS','remember_token' => NULL,'deleted_at' => NULL)
          );

          Partner::insert($partners);
          
    }
}
