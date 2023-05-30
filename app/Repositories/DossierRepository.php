<?php

namespace App\Repositories;

use App\Models\Dossier;
use App\Repositories\BaseRepository;

/**
 * Class DossierRepository
 * @package App\Repositories
 * @version May 13, 2023, 4:31 pm UTC
*/

class DossierRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'reference',
        'nom_client',
        'puissance',
        'type_ctr',
        'num_ctr_pose',
        'date_arriv_dossier_technique',
        'commentaire_technique',
        'date_approbation_technique',
        'date_arriv_dossier_commerciale',
        'commentaire_commerciale',
        'date_approbation_commerciale',
        'date_reception_technique',
        'commentaire_réception',
        'date_mise_en_service'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Dossier::class;
    }
}
