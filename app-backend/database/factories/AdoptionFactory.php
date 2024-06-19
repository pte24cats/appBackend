<?php
namespace Database\Factories;

use App\Models\Adoption;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdoptionFactory extends Factory
{
    protected $model = Adoption::class;

    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'cat_id' => \App\Models\Cat::factory(),
            'adoption_date' => $this->faker->dateTimeThisYear(),
        ];
    }
}
