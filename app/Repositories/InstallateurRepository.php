<?php

namespace App\Repositories;

use App\Models\Installateur;
use App\Repositories\BaseRepository;

/**
 * Class InstallateurRepository
 * @package App\Repositories
 * @version May 13, 2023, 4:52 pm UTC
*/

class InstallateurRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nom_societe',
        'code_anme',
        'code_steg'
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
        return Installateur::class;
    }
}
