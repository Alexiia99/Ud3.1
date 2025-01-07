<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('Nota')->insert([
            ['alumno_id' => 1, 'asignatura_id' => 1, 'nota' => 10, 'created_at' => now(), 'updated_at' => now()],
            ['alumno_id' => 2, 'asignatura_id' => 2, 'nota' => 9, 'created_at' => now(), 'updated_at' => now()],
            ['alumno_id' => 3, 'asignatura_id' => 3, 'nota' => 8, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

