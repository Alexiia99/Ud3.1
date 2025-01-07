<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AlumnosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Alumno')->truncate();

        DB::table('Alumno')->insert([
            [
                'nombre' => 'Juan',
                'email' => 'juan.perez@example.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'apellido' => 'Pérez',
            ],
            [
                'nombre' => 'María',
                'email' => 'maria.gonzalez@example.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'apellido' => 'González',
            ],
            [
                'nombre' => 'Carlos',
                'email' => 'carlos.lopez@example.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'apellido' => 'López',
            ],
            ]);
    }
}
