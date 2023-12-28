<?php

namespace Database\Factories;

use App\Models\Unit;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CollaboratorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //dd(Unit::find(rand(1, Unit::all()->count()))->id);
        return [
            'unit_id' => Unit::find(rand(1, Unit::all()->count()))->id,
            'name' => fake()->name(),
            'cpf' => fake()->ean8(),
            'email' => fake()->companyEmail(),
        ];
    }
}
