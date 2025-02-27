<?php

namespace Database\Factories;

use App\Models\Equipo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jugadora>
 */
class JugadoraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nombre" => fake()->name,
            'foto' => fake()->imageUrl(200, 200, 'sports'),
            'posicion' => fake()->randomElement(['Delantera', 'Mediocampista', 'Defensa', 'Portera']),
            'equipos_id' => Equipo::factory(),
        ];
    }
}
