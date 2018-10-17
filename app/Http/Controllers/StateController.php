<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\X_states;
use App\Http\Requests\StateRequest;

class StateController extends Controller
{
    public function index()
    {
        $states = X_states::orderBy('xxx_stt_id','ASC')->paginate();
        return view ('states.index',compact('states'));
    }

    public function create(){
        return view('states.create');
    }

    public function store(StateRequest $request){
        $state = new X_states;
        $state->xx_stt_name = $request->name;
        $state->xx_stt_code = $request->code;
        $state->save();
        return Redirect()->route('states.index')->with('info', 'El estado ha sido guardado');
    }

    public function update(StateRequest $request, $id){
        $state = X_states::find($id);
        $state->xx_stt_name = $request->name;
        $state->xx_stt_code = $request->code;
        $state->save();
        return Redirect()->route('states.index')->with('info', 'El estado fue actualizado');
    }

    public function edit($id){
        $state = X_states::find($id);
        return view('states.edit',compact('state'));
    }

    public function show($id){
        $state = X_states::find($id);
            return view('states.show',compact('state'));
    }

    public function destroy($id){
        $state = X_states::find($id);
        $state->delete();
            return back()->with('info', 'El estado fue eliminado');
    }
    
}