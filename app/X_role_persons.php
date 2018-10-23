<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class X_role_persons extends Model
{   
    public function status(){
        return $this->belongsTo('App\X_status','xxx_stas_id_rl_prs','xxx_stas_id');
    }

    protected $primaryKey = 'xxx_rl_prs_id';

    protected $fillable = [
        'xx_rl_prs_name', 'xx_rl_prs_description','xxx_stas_id_rl_prs'
        
    ];
}