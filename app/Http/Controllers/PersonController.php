<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\X_status;
use App\X_persons;
use App\X_states;
use App\X_municipalities;
use App\X_localities;
use App\X_role_persons;
use App\Http\Requests\PersonRequest;

class PersonController extends Controller
{
    public function index()
    {
        $persons = X_persons::orderBy('xxx_prsn_id','ASC')->paginate();
        return view ('persons.index',compact('persons'));
    }

    public function create(){
        $states = X_states::all();
        $selectstate = [];
        foreach($states as $state){
            $selectstate[$state->xxx_stt_id] = $state->xx_stt_name;
        }

        $municipalities = X_municipalities::all();
        $selectmunicipalities = [];
        foreach($municipalities as $municipality){
            $selectmunicipalities[$municipality->xxx_mncp_id] = $municipality->xx_mncp_name;
        }

        $localities = X_localities::all();
        $selectlocalities = [];
        foreach($localities as $location){
            $selectlocalities[$location->xxx_lclty_id] = $location->xx_lclty_name;
        }

        $status = X_status::all();
        $selectstatus = [];
        foreach($status as $stat){
            $selectstatus[$stat->xxx_stas_id] = $stat->xx_stas_name;
        }

        $roles = X_role_persons::all();
        $selectrole = [];
        foreach($roles as $role){
            $selectrole[$role->xxx_rl_prs_id] = $role->xx_rl_prs_name;
        }
        return view('persons.create', compact('selectstatus','selectstate','selectmunicipalities','selectlocalities','selectrole'));
    }

    public function store(PersonRequest $request){
        if($request->hasFile('xx_prsn_profilephoto')){
            $file = $request->file('xx_prsn_profilephoto');
            $namephoto = time().$file->getClientOriginalName();
            $file->move(public_path().'/images_acount/', $namephoto);
        }

        $person = new X_persons;
        $person->xxx_prsn_id = $request->xxx_prsn_id;
        $person->xx_prsn_folio = $request->xx_prsn_folio;
        $person->xx_prsn_name = $request->xx_prsn_name;
        $person->xx_prsn_lastname_p = $request->xx_prsn_lastname_p;
        $person->xx_prsn_lastname_m = $request->xx_prsn_lastname_m;
        $person->xx_prsn_birthdate = $request->xx_prsn_birthdate;
        $person->xx_prsn_age = $request->xx_prsn_age;
        $person->xx_prsn_gender = $request->xx_prsn_gender;
        $person->xx_prsn_street_name = $request->xx_prsn_street_name;
        $person->xx_prsn_street_num_int = $request->xx_prsn_street_num_int;
        $person->xx_prsn_street_num_ext = $request->xx_prsn_street_num_ext;
        $person->xx_prsn_profilephoto = $namephoto;
        $person->xx_prsn_curp = $request->xx_prsn_curp;
        $person->xx_prsn_rfc = $request->xx_prsn_rfc;
        $person->xx_prsn_salary = $request->xx_prsn_salary;
        $person->xx_prsn_observations = $request->xx_prsn_observations;
        $person->xxx_rl_prs_id_prsn = $request->xxx_rl_prs_id_prsn;
        $person->xxx_stt_id_prsn = $request->xxx_stt_id_prsn;
        $person->xxx_mncp_id_prsn = $request->xxx_mncp_id_prsn;
        $person->xxx_lclty_id_prsn = $request->xxx_lclty_id_prsn;
        $person->xxx_stas_id_prsn = $request->xxx_stas_id_prsn;
        $person->save();
        return Redirect()->route('persons.index')->with('info', 'El empleado ha sido guardado');
    }

    public function update(PersonRequest $request, $id){
        $file = $request->file('profile_picture');
        if($request->hasFile('profile_picture')){
            $namephoto = time().$file->getClientOriginalName();
            $file->move(public_path().'/images_acount/', $namephoto);
        }
        $person = X_persons::find($id);
        $person->xxx_prsn_id = $request->xxx_prsn_id;
        $person->xx_prsn_folio = $request->xx_prsn_folio;
        $person->xx_prsn_name = $request->xx_prsn_name;
        $person->xx_prsn_lastname_p = $request->xx_prsn_lastname_p;
        $person->xx_prsn_lastname_m = $request->xx_prsn_lastname_m;
        $person->xx_prsn_birthdate = $request->xx_prsn_birthdate;
        $person->xx_prsn_age = $request->xx_prsn_age;
        $person->xx_prsn_gender = $request->xx_prsn_gender;
        $person->xx_prsn_street_name = $request->xx_prsn_street_name;
        $person->xx_prsn_street_num_int = $request->xx_prsn_street_num_int;
        $person->xx_prsn_street_num_ext = $request->xx_prsn_street_num_ext;
        if($file != ''){        
        $person->xx_prsn_profilephoto = $namephoto;
        }
        $person->xx_prsn_curp = $request->xx_prsn_curp;
        $person->xx_prsn_rfc = $request->xx_prsn_rfc;
        $person->xx_prsn_salary = $request->xx_prsn_salary;
        $person->xx_prsn_observations = $request->xx_prsn_observations;
        $person->xxx_rl_prs_id_prsn = $request->xxx_rl_prs_id_prsn;
        $person->xxx_stt_id_prsn = $request->xxx_stt_id_prsn;
        $person->xxx_mncp_id_prsn = $request->xxx_mncp_id_prsn;
        $person->xxx_lclty_id_prsn = $request->xxx_lclty_id_prsn;
        $person->xxx_stas_id_prsn = $request->xxx_stas_id_prsn;
        $person->save();
        return Redirect()->route('persons.index')->with('info', 'El empleado fue actualizado');
    }

    public function edit($id){
        $states = X_states::all();
        $selectstate = [];
        foreach($states as $state){
            $selectstate[$state->xxx_stt_id] = $state->xx_stt_name;
        }

        $municipalities = X_municipalities::all();
        $selectmunicipalities = [];
        foreach($municipalities as $municipality){
            $selectmunicipalities[$municipality->xxx_mncp_id] = $municipality->xx_mncp_name;
        }

        $localities = X_localities::all();
        $selectlocalities = [];
        foreach($localities as $location){
            $selectlocalities[$location->xxx_lclty_id] = $location->xx_lclty_name;
        }

        $status = X_status::all();
        $selectstatus = [];
        foreach($status as $stat){
            $selectstatus[$stat->xxx_stas_id] = $stat->xx_stas_name;
        }

        $roles = X_role_persons::all();
        $selectrole = [];
        foreach($roles as $role){
            $selectrole[$role->xxx_rl_prs_id] = $role->xx_rl_prs_name;
        }
        
        $person = X_persons::find($id);

        return view('persons.edit',compact('person','selectstatus','selectstate','selectmunicipalities','selectlocalities','selectrole'));
    }

    public function show($id){
        $person = X_persons::find($id);
            return view('persons.show',compact('person'));
    }

    public function destroy($id){
        $person = X_persons::find($id);
        $person->delete();
            return back()->with('info', 'El empleado fue eliminado');
    }
    
}