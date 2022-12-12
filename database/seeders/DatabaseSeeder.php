<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\autores;
use App\Models\clasificaciones;
use App\Models\editoriales;
use App\Models\libros;
use App\Models\tags;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::makeDirectory('public/libros');
        $this->call(RoleSedder::class);
        $this->call(userSeeder::class);
        $this->call(clasificacionSeeder::class);
        editoriales::factory(5)->create();
        tags::factory(8)->create();
        autores::factory(100)->create();
        $this->call(librosSeeder::class);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
