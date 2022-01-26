<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Libro;

class BibliotecaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' =>$this->faker->name,
            'id_usuario' => User::all()->random()->id,
            'id_libro' => Libro::all()->random()->id
        ];
    }
}
