<?php

namespace Database\Factories;

use App\Models\Dossier;
use Illuminate\Database\Eloquent\Factories\Factory;

class DossierFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dossier::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'reference' => $this->faker->word,
        'nom_client' => $this->faker->word,
        'puissance' => $this->faker->word,
        'type_ctr' => $this->faker->word,
        'num_ctr_pose' => $this->faker->word,
        'date_arriv_dossier_technique' => $this->faker->date('Y-m-d H:i:s'),
        'commentaire_technique' => $this->faker->text,
        'date_approbation_technique' => $this->faker->word,
        'date_arriv_dossier_commerciale' => $this->faker->word,
        'commentaire_commerciale' => $this->faker->text,
        'date_approbation_commerciale' => $this->faker->word,
        'date_reception_technique' => $this->faker->word,
        'commentaire_réception' => $this->faker->text,
        'date_mise_en_service' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
