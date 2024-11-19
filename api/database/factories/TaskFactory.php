<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Enum\StatusEnum;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->realText(40, 2),
            'description' => fake()->text(),
            'status' => fake()->randomElement([
                StatusEnum::PROGRESS->value,
                StatusEnum::PENDING->value,
                StatusEnum::COMPLETED->value
            ]),
            'user_id' => fake()->randomNumber(2, false)
        ];
    }
}
