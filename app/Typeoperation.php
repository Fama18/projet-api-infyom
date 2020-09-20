<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typeoperation extends Model
{
    protected $fillable = array('libelle');
    public static $rules = array('libelle' => 'required|min:16'
                                );
    public function operation() {
        return $this->hasMany('App\Operation');
    }
}
