<?php

namespace Database\Factories;

use App\Models\Moderador;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ModeradorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Moderador::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nombre = $this->faker->name;
        return [
            'nombre_usuario' => $nombre
        ];
    }
}
