<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'xx_prsn_folio'=>'required',
            'xx_prsn_name'=>'required', 
            'xx_prsn_lastname_p'=>'required',
            'xx_prsn_lastname_m'=>'required',
            'xx_prsn_birthdate'=>'required',
            'xx_prsn_age'=>'required',
            'xx_prsn_gender'=>'required',
            'xx_prsn_street_name'=>'required',
            'xx_prsn_street_num_int'=>'required',
            'xx_prsn_street_num_ext'=>'required',
            'xx_prsn_curp'=>'required',
            'xx_prsn_rfc'=>'required',
            'xx_prsn_salary'=>'required',
            'xx_prsn_observations'=>'required',
        ];
    }
}
