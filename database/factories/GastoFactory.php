<?php

namespace Database\Factories;

use App\Models\Gasto;
use Illuminate\Database\Eloquent\Factories\Factory;

class GastoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Gasto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->text(50),
            'valor' =>  rand(1,10),
            'cantidad' =>  rand(1,10),
            'fecha' => $this->faker->date(),
            'descripcion' => $this->faker->text(200),

            'user_id'=> rand(1,5),
            'tipo_gasto_id' => rand(1,3),
            'local_id' => rand(1,15)
        ];
    }
}
