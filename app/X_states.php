<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class X_states extends Model
{
    public function status(){
        return $this->belongsTo('App\X_status','xxx_stas_id_stt','xxx_stas_id');
    }
    
    protected $primaryKey = 'xxx_stt_id';

    protected $fillable = [
        'xx_stt_name', 'xx_stt_code','xxx_stas_id_stt'
    ];
}