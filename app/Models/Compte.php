<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Compte
 * @package App\Models
 * @version September 20, 2020, 2:59 pm UTC
 *
 * @property string $numagence
 */
class Compte extends Model
{
    use SoftDeletes;

    public $table = 'comptes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'numagence'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'numagence' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'numagence' => 'required'
    ];

    
}
