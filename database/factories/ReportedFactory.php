<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reported>
 */
class ReportedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'from_user_id' => User::inRandomOrder()->first(),
            'to_user_id' => User::inRandomOrder()->first(),
            'car_id' => $this->faker->numberBetween(1, 10),
            'content' => $this->faker->title()
        ];
    }
}
