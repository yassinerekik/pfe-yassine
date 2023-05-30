<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Dossier
 * @package App\Models
 * @version May 13, 2023, 4:31 pm UTC
 *
 * @property string $reference
 * @property string $nom_client
 * @property string $puissance
 * @property string $type_ctr
 * @property string $num_ctr_pose
 * @property string $date_arriv_dossier_technique
 * @property string $commentaire_technique
 * @property string $date_approbation_technique
 * @property string $date_arriv_dossier_commerciale
 * @property string $commentaire_commerciale
 * @property string $date_approbation_commerciale
 * @property string $date_reception_technique
 * @property string $commentaire_réception
 * @property string $date_mise_en_service
 */
class Dossier extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'dossiers';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'reference',
        'district_id',
        'installateur_id',
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'reference' => 'string',
        'nom_client' => 'string',
        'puissance' => 'string',
        'type_ctr' => 'string',
        'num_ctr_pose' => 'string',
        'commentaire_technique' => 'string',
        'date_approbation_technique' => 'date',
        'date_arriv_dossier_commerciale' => 'date',
        'commentaire_commerciale' => 'string',
        'date_approbation_commerciale' => 'date',
        'date_reception_technique' => 'date',
        'commentaire_réception' => 'string',
        'date_mise_en_service' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'reference' => 'required',
        'nom_client' => 'required',
        'puissance' => 'required',
        'type_ctr' => 'required',
        'num_ctr_pose' => '',
        'date_arriv_dossier_technique' => 'required',
        'date_reception_technique' => ''
    ];

    
}
