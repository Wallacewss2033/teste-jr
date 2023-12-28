<?php

namespace Database\Factories;

use App\Models\Collaborator;
use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EmployeePositionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'positions_id' => Position::find(rand(1, 10))->id,
            'collaborator_id' => Collaborator::find(rand(1, 100))->id,
            'performance_note' => rand(1, 10),
        ];
    }
}
