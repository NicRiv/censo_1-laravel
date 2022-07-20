<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->firstName(),
            'apellido' => $this->faker->lastName(),
            'dni' => $this->faker->unique()->numberBetween(1000000, 60000000),
            'nacimiento' => $this->faker->date(),
            'genero' => $this->faker->randomElement([
                'Masculino',
                'Femenino',
                'Otro'
            ]),
            'estadocivil' => $this->faker->randomElement([
                'Solter',
                'Casad',
                'Union Libre',
                'Divorciad',
                'Viud'
            ]),
            'provincia' => $this->faker->state(),
            'localidad' => $this->faker->city(),
            'email' => $this->faker->unique()->email(),
            'telefono' => $this->faker->unique()->numberBetween(150000000, 159999999)
        ];
    }
}
