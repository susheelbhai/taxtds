<?php

namespace Database\Seeders;

use App\Models\Salutation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SalutationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $salutations = array(
            array('id' => '1','name' => 'Chartered Accountant','is_active' => '1'),
            array('id' => '2','name' => 'Cost Accountant','is_active' => '1'),
            array('id' => '3','name' => 'Company Secratery','is_active' => '1'),
            array('id' => '4','name' => 'Other','is_active' => '1')
          );
          Salutation::insert($salutations);
    }
}
