<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = Role::create(['name' => 'Admin']);
        $roleManager = Role::create(['name' => 'Manager']);

        Permission::create(['name' => 'admin.home', 'description' => 'Ver el Dashboard'])->syncRoles([$roleAdmin, $roleManager]);

        Permission::create(['name' => 'admin.users.index', 'description' => 'Ver listado de usuarios'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.users.update', 'description' => ''])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.users.edit', 'description' => 'Asignar un rol'])->syncRoles([$roleAdmin]);

        Permission::create(['name' => 'admin.clasificaciones.index', 'description' => 'Ver listado de clasificaciones'])->syncRoles([$roleAdmin, $roleManager]);
        Permission::create(['name' => 'admin.clasificaciones.create', 'description' => 'Crear una clasificacion'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.clasificaciones.edit', 'description' => 'Editar una clasificacion'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.clasificaciones.destroy', 'description' => 'Eliminar una clasificacion'])->syncRoles([$roleAdmin]);

        Permission::create(['name' => 'admin.tags.index', 'description' => 'Ver listado de etiquetas'])->syncRoles([$roleAdmin, $roleManager]);
        Permission::create(['name' => 'admin.tags.create', 'description' => 'Crear una etiqueta'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.tags.edit', 'description' => 'Editar una etiqueta'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.tags.destroy', 'description' => 'Eliminar una etiqueta'])->syncRoles([$roleAdmin]);

        Permission::create(['name' => 'admin.autores.index', 'description' => 'Ver listado de autores'])->syncRoles([$roleAdmin, $roleManager]);
        Permission::create(['name' => 'admin.autores.create', 'description' => 'Crear un autor'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.autores.edit', 'description' => 'Editar un autor'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.autores.destroy', 'description' => 'Eliminar un autor'])->syncRoles([$roleAdmin]);

        Permission::create(['name' => 'admin.editoriales.index', 'description' => 'Ver listado de editoriales'])->syncRoles([$roleAdmin, $roleManager]);
        Permission::create(['name' => 'admin.editoriales.create', 'description' => 'Crear una editorial'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.editoriales.edit', 'description' => 'Editar una editorial'])->syncRoles([$roleAdmin]);
        Permission::create(['name' => 'admin.editoriales.destroy', 'description' => 'Elminar una editorial'])->syncRoles([$roleAdmin]);

        Permission::create(['name' => 'admin.libros.index', 'description' => 'Ver listado de libros'])->syncRoles([$roleAdmin, $roleManager]);
        Permission::create(['name' => 'admin.libros.create', 'description' => 'Crear un libro'])->syncRoles([$roleAdmin, $roleManager]);
        Permission::create(['name' => 'admin.libros.edit', 'description' => 'Editar un libro'])->syncRoles([$roleAdmin, $roleManager]);
        Permission::create(['name' => 'admin.libros.destroy', 'description' => 'Eliminar un libro'])->syncRoles([$roleAdmin, $roleManager]);

        

    }
}