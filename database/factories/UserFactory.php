<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = User::class;

    public function definition()
    {
        return [
            //'role_id'=>$this->faker->randomElement([1,2,3,4]),
            'cedula' => $this->faker->uuid(),
            'nombre' => $this->faker->name(),
            'apellido' => $this->faker->lastName(),
            'direccion' => $this->faker->streetAddress,
            'telefono' => '02' . $this->faker->randomNumber(8),

            'fecha_nacimiento' => $this->faker->dateTimeBetween('-50 years', 'now'),
            'genero' => $this->faker->randomElement(['masculino', 'femenino']),
            'especialidad' => $this->faker->jobTitle,

            'nombre_usuario' => $this->faker->name(),
            'password' => Hash::make('secret'),

            'rol' => $this->faker->randomElement(['admin', 'doctor', 'paciente', 'familiar']),
        ];



    }
/*
   $table->increments('id');


            $table->string('genero', 20);
            $table->string('especialidad', 64);
            $table->string('nombre_usuario', 64);
            $table->string('password', 10);
            $table->string('rol', 10);
*/


    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
