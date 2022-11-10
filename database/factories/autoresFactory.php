<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\autores>
 */
class autoresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $nombre = $this->faker->unique()->name();
        return [
            'nombre' => $nombre,
            'slugNombre' => Str::slug($nombre),
            'apellidoPaterno' => $this->faker->lastName(),
            'apellidoMaterno' =>$this->faker->lastName()

        ];
    }
}
