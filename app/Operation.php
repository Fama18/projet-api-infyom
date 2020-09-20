<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    protected $fillable = array('comptes_id', 'typeoperations_id', 'dateoperation');
    public static $rules = array('comptes_id' => 'required|bigInteger',
                                 'typeoperations_id' => 'required|bigInteger',
                                 'dateoperation' => 'required|min:16'
                                );
    public function compte() {
        return $this->belongsTo('App\Compte');
    }
    public function typeop() {
        return $this->belongsTo('App\Typeoperation');
    }
}
