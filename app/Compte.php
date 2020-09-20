<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    protected $fillable = array('numeroagence', 'numerocompte', 'clerib','solde');
    public static $rules = array('numeroagence' => 'required|min:16',
                                 'numerocompte' => 'required|min:16',
                                 'clerib' => 'required|min:10',
                                 'solde' => 'required|min:10'
                                );
    public function operation() {
        return $this->hasMany('App\Operation');
    }
}
