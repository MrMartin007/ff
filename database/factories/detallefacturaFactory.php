<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class detallefacturaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'login_usr'=>$this->faker->word(),
            'sesion_ft'=>$this->faker->numerify(001),
            'mes_df'=>$this->faker->dateTime(),
            'anio_df'=>$this->faker->dateTime(),
            'monto_df'=>$this->faker->numerify(150),
            'estado_df'=>$this->faker->address('guatemala'),
            'concepto_df'=>$this->faker->word(),
            'mora_df'=>$this->faker->word(),
            'descuento_df'=>$this->faker->numerify(100),
            'fechcreado_df'=>$this->faker->date,
        'cantidad_df'=>$this->faker->numerify(120),
            'punidad_df'=>$this->faker->word(100),
            'factura_sesion_ft'=>$this->faker->numerify(001),
        ];
    }
}
