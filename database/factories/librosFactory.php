<?php

namespace Database\Factories;
use App\Models\clasificaciones;
use App\Models\libros;
use App\Models\editoriales;
use App\Models\User;
use Illuminate\Support\Str;;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\libros>
 */
class librosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $titulo = $this->faker->unique()->sentence();
        return [
            'titulo' => $titulo,
            'codigo' =>$this->faker->unique()->regexify('[A-Z]{2}[0-9]{6}'),
            'slugLibros' => Str::slug($titulo),
            'extract' => $this->faker->text(100),
            'body' =>$this->faker->text(500),
            'status' =>$this->faker->randomElement([1,2]),
            'user_id' =>User::all()->random()->id,
            'id_clasificacion' => clasificaciones::all()->random()->id,
            'id_editorial' => editoriales::all()->random()->id
        ];
    }
}
