<?php
namespace Database\Factories;

use App\Models\Cat;
use Illuminate\Database\Eloquent\Factories\Factory;

class CatFactory extends Factory
{
    protected $model = Cat::class;

    public function definition(): array
    {
        return [
            'cat_name' => $this->faker->unique()->name,
            'cat_color' => $this->faker->safeColorName,
            'cat_description' => $this->faker->text,
            'good_cat_status' => $this->faker->boolean,
            'cat_picture' => null, 
            'cat_age' => $this->faker->numberBetween(1, 15),
            'cat_gender' => $this->faker->randomElement(['male', 'female']),
            'cat_breed' => $this->faker->word,
        ];
    }
}
