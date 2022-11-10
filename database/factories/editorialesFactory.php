<?php

namespace Database\Factories;
use App\Models\libros;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\editoriales>
 */
class editorialesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $describeEditorial = $this->faker->unique()->word(45);
        return [
            'describeEditorial' => $describeEditorial,
            'slugEditorial' => Str::slug($describeEditorial)
        ];
    }
}
