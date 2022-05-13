<?php

namespace Database\Factories;
use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $name = $this->faker->sentence();
        return [
            'name' => $name , //oración
            'slug' => Str::slug($name, '-'),
            'description' => $this->faker->paragraph() , //párrafo
            'category' => $this->faker->randomElement(['Web', 'Diseño web'])  
        ];
    }
}
