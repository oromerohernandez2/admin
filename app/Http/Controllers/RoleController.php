<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\X_role_persons;
use App\X_status;
use App\Http\Requests\RoleRequest;

class RoleController extends Controller
{
    public function index()
    {
        $roles = X_role_persons::orderBy('xxx_rl_prs_id','ASC')->paginate();
        return view ('roles.index',compact('roles'));
    }

    public function create(){
        $status = X_status::all();
        $selectstatus = [];
        foreach($status as $stat){
            $selectstatus[$stat->xxx_stas_id] = $stat->xx_stas_name;
        }
        return view('roles.create', compact('selectstatus'));
    }

    public function store(RoleRequest $request){
        $role = new X_role_persons;
        $role->xxx_rl_prs_id = $request->xxx_rl_prs_id;
        $role->xx_rl_prs_name = $request->xx_rl_prs_name;
        $role->xx_rl_prs_description = $request->xx_rl_prs_description;
        $role->xxx_stas_id_rl_prs = $request->xxx_stas_id_rl_prs;
        $role->save();
        return Redirect()->route('roles.index')->with('info', 'El rol ha sido guardado');
    }

    public function update(RoleRequest $request, $id){
        $role = X_role_persons::find($id);
        $role->xxx_rl_prs_id = $request->xxx_rl_prs_id;
        $role->xx_rl_prs_name = $request->xx_rl_prs_name;
        $role->xx_rl_prs_description = $request->xx_rl_prs_description;
        $role->xxx_stas_id_rl_prs = $request->xxx_stas_id_rl_prs;
        $role->save();
        return Redirect()->route('roles.index')->with('info', 'El rol fue actualizado');
    }

    public function edit($id){
        $status = X_status::all();
        $selectstatus = [];
        foreach($status as $stat){
            $selectstatus[$stat->xxx_stas_id] = $stat->xx_stas_name;
        }

        $role = X_role_persons::find($id);

        return view('roles.edit',compact('role','selectstatus'));
    }

    public function show($id){
        $role = X_role_persons::find($id);
            return view('roles.show',compact('role'));
    }

    public function destroy($id){
        $role = X_role_persons::find($id);
        $role->delete();
            return back()->with('info', 'El rol fue eliminado');
    }
    
}