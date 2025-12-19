<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mascota>
 */
class MascotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $especies = ['Perro', 'Gato', 'Conejo', 'Hamster', 'Ave'];
        $razasPerro = ['Labrador', 'Pug', 'Bulldog', 'Pastor Aleman', 'Chihuahua'];
        $razasGato = ['Persa', 'Siames', 'Angora', 'Criollo'];
        
        $especie = $this->faker->randomElement($especies);
        $raza = 'Mestizo';
        
        if ($especie == 'Perro') $raza = $this->faker->randomElement($razasPerro);
        if ($especie == 'Gato') $raza = $this->faker->randomElement($razasGato);

        return [
            'nombre' => $this->faker->firstName(), // Pet names often human-like
            'especie' => $especie,
            'raza' => $raza,
            'fecha_nacimiento' => $this->faker->date(),
            'peso' => $this->faker->randomFloat(2, 1, 40),
            'color' => $this->faker->colorName(),
            'sexo' => $this->faker->randomElement(['Macho', 'Hembra']),
            'cliente_id' => \App\Models\Cliente::factory(),
        ];
    }
}
