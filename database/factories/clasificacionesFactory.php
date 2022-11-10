<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
 

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\clasificaciones>
 */
class clasificacionesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $describeClasificacion = $this->faker->unique()->word(45);
        return [
            'describeClasificacion'=> $describeClasificacion,
            'slugClasificacion' => Str::slug($describeClasificacion)
        ];
    }
}
