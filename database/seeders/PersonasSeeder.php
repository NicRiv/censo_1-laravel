<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            [
                'nombre' => 'Fulano',
                'apellido' => 'Apel',
                'dni' => 22111000,
                'nacimiento' => '2018-01-01',
                'genero' => 'Masculino',
                'estadocivil' => 'Soltero',
                'provincia' => 'Chubut',
                'localidad' => 'El hoyo',
                'email' => 'fulano@mail.com',
                'telefono' => 12345678
            ],
            [
                'nombre' => 'Mengana',
                'apellido' => 'Apel',
                'dni' => 22111011,
                'nacimiento' => '2018-01-01',
                'genero' => 'Femenino',
                'estadocivil' => 'Casada',
                'provincia' => null,
                'localidad' => null,
                'email' => 'mengana@mail.com',
                'telefono' => 12345699
            ],
        ];

        // php artisan db:seed --class=PersonasSeeder
        DB::table('people')->insert($datos);
    }
}
