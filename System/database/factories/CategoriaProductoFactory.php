<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoriaProductoFactory extends Factory
{
    protected $model = \App\Models\CategoriaProducto::class;

    public function definition(): array
    {
        return [
            'nombre' => $this->faker->unique()->randomElement([
                'Alimentos Secos', 'Alimentos Húmedos', 'Juguetes', 'Correas y Collares', 
                'Medicamentos', 'Higiene y Aseo', 'Snacks y Premios', 'Camas y Mantas', 
                'Ropa y Accesorios', 'Transportadoras', 'Rascadores', 'Arenas',
                'Vitaminas y Suplementos', 'Antipulgas', 'Comederos', 'Bebederos'
            ]),
            'descripcion' => $this->faker->sentence(),
            'activa' => true,
        ];
    }
}
