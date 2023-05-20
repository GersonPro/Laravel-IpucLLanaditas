<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Membership>
 */
class MembershipFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName(),
            'l_name' => $this->faker->lastName(),
            'doc_type' => $this->faker->randomElement([
                'CC', // Cedula de ciudadania
                'TI', // Tarjeta de identidad
                'RC', // Registro civil
                'TE', // Tarjeta de extranjeria 
                'PA', // Pasaporte
                'TDE', // Tipo de documento extranjero
            ]),
            'doc_number' => random_int(999, 9999),
            'bir_date' => $this->faker->randomElement(['28/03/2002']),
            'chris_date' => $this->faker->randomElement(['28/03/2002']),
            'h_spirit' => $this->faker->randomElement(['Si']),
            'is_active' => $this->faker->randomElement(['Si'])
        ];
    }
}
