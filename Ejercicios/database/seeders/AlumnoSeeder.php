<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    

        
        DB::table('Alumno')->insert([
            ['name' => 'Alexia Herrador', 'email' => 'alexiahj@hotmail.es'],
            ['name' => 'Martin Ernt', 'email' => 'martincito@gmail.com'],
            ['name' => 'Mario Pascual', 'email' => 'holaquetal@gmail.com'],
        ]);
    }
}
