<?php

namespace Database\Factories;
use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{

    protected $model = Curso::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence() , //oración
            'description' => $this->faker->paragraph() , //párrafo
            'category' => $this->faker->randomElement(['Web', 'Diseño web'])  
        ];
    }
}
