<?php

namespace Database\Factories;

use App\Models\Installateur;
use Illuminate\Database\Eloquent\Factories\Factory;

class InstallateurFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Installateur::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom_societe' => $this->faker->text,
        'code_anme' => $this->faker->text,
        'code_steg' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
