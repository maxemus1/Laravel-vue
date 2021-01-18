<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Category;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @param Faker $faker
     * @return void
     */
    public function run(Faker $faker)
    {
        $category = ['games', 'clothes', 'electronics', 'toys'];

        foreach ($category as $data) {
            Category::query()->create(['name' => $data, 'description' => $faker->text]);
        }
    }
}
