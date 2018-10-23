<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class X_persons extends Model
{   
    public function status(){
        return $this->belongsTo('App\X_status','xxx_stas_id_prsn','xxx_stas_id');
    }

    public function state(){
        return $this->belongsTo('App\X_states','xxx_stt_id_prsn','xxx_stt_id');
    }

    public function municip(){
        return $this->belongsTo('App\X_municipalities','xxx_mncp_id_prsn','xxx_mncp_id');
    }

    public function localitie(){
        return $this->belongsTo('App\X_localities','xxx_lclty_id_prsn','xxx_lclty_id');
    }

    public function role(){
        return $this->belongsTo('App\X_role_persons','xxx_rl_prs_id_prsn','xxx_rl_prs_id');
    }

    protected $primaryKey = 'xxx_prsn_id';

    protected $fillable = [
        'xx_prsn_folio','xx_prsn_name', 'xx_prsn_lastname_p','xx_prsn_lastname_m','xx_prsn_birthdate','xx_prsn_age','xx_prsn_gender','xx_prsn_street_name','xx_prsn_street_num_int','xx_prsn_stree_num_ext','xx_prsn_profilephoto','xx_prsn_curp','xx_prsn_rfc','xx_prsn_salary','xx_prsn_observations','xxx_rl_prs_id_prsn','xxx_stt_id_prsn','xxx_mncp_id_prsn','xxx_lclty_id_prsn','xxx_stas_id_prsn'
        
    ];
}