<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Installateur
 * @package App\Models
 * @version May 13, 2023, 4:52 pm UTC
 *
 * @property string $nom_societe
 * @property string $code_anme
 * @property string $code_steg
 */
class Installateur extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'installateurs';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nom_societe',
        'code_anme',
        'code_steg'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nom_societe' => 'string',
        'code_anme' => 'string',
        'code_steg' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nom_societe' => 'required',
        'code_anme' => 'required',
        'code_steg' => 'required'
    ];

    
}
