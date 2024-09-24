<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        // seeder para los roles y permisos admin, comision, docentes, estudiantes

        $admin = Role::create(['name'=>'admin']);
        $comision = Role::create(['name'=>'comision']);
        $docentes = Role::create(['name'=>'docentes']);
        $estudiantes = Role::create(['name'=>'estudiantes']);

         $this->call([ DocenteSeeder::class,]);
        

    }
}
