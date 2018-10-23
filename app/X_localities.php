<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class X_localities extends Model
{
    public function status(){
        return $this->belongsTo('App\X_status','xxx_stas_id_lclty','xxx_stas_id');
    }

    public function municip(){
        return $this->belongsTo('App\X_municipalities','xxx_mncp_id_lclty','xxx_mncp_id');
    }
    
    protected $primaryKey = 'xxx_lclty_id';

    protected $fillable = [
        'xx_lclty_name', 'xx_lclty_postalcode','xx_lclty_zone','xxx_mncp_id_lclty','xxx_stas_id_lclty'
    ];
}