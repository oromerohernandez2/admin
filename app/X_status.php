<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class X_status extends Model
{
    public function municipalitie(){
        return $this->hasMany('App\Municipalitie');
    }
    
    protected $primaryKey = 'xxx_stas_id';

    protected $fillable = [
        'xx_stas_name', 'xx_stas_description'
        
    ];
}