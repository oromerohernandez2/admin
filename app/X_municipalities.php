<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class X_municipalities extends Model
{
    public function status(){
        return $this->belongsTo('App\X_status','xxx_stas_id_mncp','xxx_stas_id');
    }

    public function state(){
        return $this->belongsTo('App\X_states','xxx_stt_id_mncp','xxx_stt_id');
    }
    
    protected $primaryKey = 'xxx_mncp_id';

    protected $fillable = [
        'xx_mncp_name', 'xxx_stt_id_mncp','xxx_stas_id_mncp'
    ];
}