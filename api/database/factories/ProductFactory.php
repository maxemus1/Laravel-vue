<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstNameMale,
            'prise' => rand(999, 1500),
            'picture' => $this->faker->image(),
            'description' => $this->faker->text,
            'category_id'=>rand(1,4),
        ];
    }
}
