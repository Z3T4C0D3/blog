<?php

namespace Database\Seeders;

use App\Models\images;
use Illuminate\Database\Seeder;
use App\Models\libros;

class librosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $libros = libros::factory(10)->create();
        foreach($libros as $libro){
            images::factory(1)->create([
                'imageable_id' => $libro->id,
                'imageable_type' => libros::class
            ]);
            $libro->tags()->attach([
                rand(1,8)
                
            ]);
            $libro->autores()->attach([
                rand(1,15)
            ]);

        }
    }
}
