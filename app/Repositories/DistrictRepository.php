<?php

namespace App\Repositories;

use App\Models\District;
use App\Repositories\BaseRepository;

/**
 * Class DistrictRepository
 * @package App\Repositories
 * @version May 20, 2023, 4:46 pm UTC
*/

class DistrictRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ur',
        'unite'
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
        return District::class;
    }
}
