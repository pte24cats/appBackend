<?php
namespace Database\Factories;

use App\Models\Sponsor;
use Illuminate\Database\Eloquent\Factories\Factory;

class SponsorFactory extends Factory
{
    protected $model = Sponsor::class;

    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'cat_id' => \App\Models\Cat::factory(),
            'payment_amount' => $this->faker->numberBetween(100, 5000),
            'start_date' => $this->faker->dateTimeThisYear(),
            'end_date' => $this->faker->dateTimeThisYear('+1 year'),
        ];
    }
}
