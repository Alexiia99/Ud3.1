<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AsignaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Asignatura')->insert([
            ['nombre' => 'Programación Java', 'descripcion' => 'Programación en lenguaje de Java'],
            ['nombre' => 'Acceso a Datos', 'descripcion' => 'Asignatura que aun no sabemos exactamente que es, tiene docker, git y bases de datos'],
            ['nombre' => 'Gestión Empresarial', 'descripcion' => 'Básicamente todo sobre los ERP'],
        ]);

    }
}
