<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class facturaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'cod_servicio'=>$this->faker->numberBetween(10,100),
        'login_usr'=>$this->faker->word(),
        'emicion_ft'=>$this->faker->numerify(001),
        'total_ft'=>$this->faker->numberBetween(100,350),
        'nit_ft'=>$this->faker->numberBetween(10000,30000),
        'nombre_ft'=>$this->faker->name(),
        'direccion_ft'=>$this->faker->address('guatemala'),
        'iva_ft'=>$this->faker->numerify(12),
        'serie_ft'=>$this->faker->numerify(150),
        'numero_ft'=>$this->faker->phoneNumber(),
        'estado_ft'=>$this->faker->macAddress(),
        'comentario_ft'=>$this->faker->word(),
        'fechcreado_ft'=>$this->faker->dateTime(),
        'seriefel_ft'=>$this->faker->numerify(2344),
        'numerofel_ft'=>$this->faker->numerify(26354),
       'autorizacionfel_ft'=>$this->faker->word(),
        'fechacertfel_ft'=>$this->faker->dateTime(),
        'direcesta_ft'=>$this->faker->address(),
        'nombresta_ft'=>$this->faker->name(),
        'fechacreadofel_ft'=>$this->faker->dateTime(),
        'tipo_ft'=>$this->faker->word(),

        ];
    }
}
