<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'id' => '1',
            'name' => 'Restaurants',
            'icon' => 'fas fa-utensils',
        ]);
        Category::create([
            'id' => '2',
            'name' => 'Hotels',
            'icon' => 'fas fa-umbrella-beach',
        ]);
        Category::create([
            'id' => '3',
            'name' => 'Fitness',
            'icon' => 'fas fa-dumbbell',
        ]);
        Category::create([
            'id' => '4',
            'name' => 'Coffee Shop',
            'icon' => 'fas fa-coffee',
        ]);
        Category::create([
            'id' => '5',
            'name' => 'Shopping',
            'icon' => 'fas fa-shopping-bag',
        ]);
        Category::create([
            'id' => '6',
            'name' => 'Movie Theater',
            'icon' => 'fas fa-film',
        ]);
        Category::create([
            'id' => '7',
            'name' => 'Banks',
            'icon' => 'fas fa-university',
        ]);
        Category::create([
            'id' => '8',
            'name' => 'Super Market',
            'icon' => 'fas fa-shopping-cart',
        ]);
    }
}
