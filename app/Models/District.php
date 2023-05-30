<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class District
 * @package App\Models
 * @version May 20, 2023, 4:46 pm UTC
 *
 * @property string $ur
 * @property string $unite
 */
class District extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'districts';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'ur',
        'unite'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ur' => 'string',
        'unite' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ur' => 'required',
        'unite' => 'required'
    ];

    
}
