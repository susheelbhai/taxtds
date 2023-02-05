<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubCategory::create([
            'id' => '1',
            'category_id' => '1',
            'name' => 'food plaza',
            'icon' => 'fas fa-utensils',
        ]);
        SubCategory::create([
            'id' => '2',
            'category_id' => '1',
            'name' => 'dominos',
            'icon' => 'fas fa-umbrella-beach',
        ]);
        SubCategory::create([
            'id' => '3',
            'category_id' => '1',
            'name' => 'pizza hut',
            'icon' => 'fas fa-dumbbell',
        ]);
        SubCategory::create([
            'id' => '4',
            'category_id' => '2',
            'name' => 'Coffee Shop',
            'icon' => 'fas fa-coffee',
        ]);
        SubCategory::create([
            'id' => '5',
            'category_id' => '2',
            'name' => 'Shopping',
            'icon' => 'fas fa-shopping-bag',
        ]);
        SubCategory::create([
            'id' => '6',
            'category_id' => '3',
            'name' => 'Movie Theater',
            'icon' => 'fas fa-film',
        ]);
        SubCategory::create([
            'id' => '7',
            'category_id' => '4',
            'name' => 'Banks',
            'icon' => 'fas fa-university',
        ]);
        SubCategory::create([
            'id' => '8',
            'category_id' => '6',
            'name' => 'Super Market',
            'icon' => 'fas fa-shopping-cart',
        ]);
    }
}
