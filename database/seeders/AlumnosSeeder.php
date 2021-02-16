<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alumnos')->insert([
            [
            'nombre' => 'Lluís',
            'apellidos' => 'Suau Pecos',
            'dni' => '29403144N',
            ],
            
            [
            'nombre' => 'Paco',
            'apellidos' => 'Sánchez',
            'dni' => '49320685Z',
            ],
            
            [
            'nombre' => 'Juan',
            'apellidos' => 'Olivares',
            'dni' => '04932841L',
            ],
        ]);
    }
}
