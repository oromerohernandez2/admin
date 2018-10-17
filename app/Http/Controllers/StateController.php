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

    public function show($id){
        $state = X_states::find($id);
            return view('states.show',compact('state'));
    }
    
}