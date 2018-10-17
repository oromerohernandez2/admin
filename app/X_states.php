<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class X_states extends Model
{
    public function municipalitie(){
        return $this->hasMany('App\Municipalitie');
    }
    
    protected $primaryKey = 'xxx_stt_id';

    protected $fillable = [
        'xx_stt_name', 'xx_stt_code'
        
    ];
}