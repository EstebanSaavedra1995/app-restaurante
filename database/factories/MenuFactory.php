<?php

namespace Database\Factories;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;

class MenuFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Menu::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tipo' => $this->faker->randomElement(['bebida','comida','postre']) ,
            'descripcion' => $this->faker->text(50) ,
            'precio' => $this->faker->randomElement([150.90,300.0,1150.90]),
        ];
    }
}
