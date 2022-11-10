<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tags>
 */
class tagsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $describeTag = $this->faker->unique()->word(10);
        return [
            'describeTag' => $describeTag,
             'slugTag' => Str::slug($describeTag)
        ];
    }
}
