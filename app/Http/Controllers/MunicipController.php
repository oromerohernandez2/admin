<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\X_municipalities;
use App\Http\Requests\StateRequest;

class MunicipController extends Controller
{
    public function index()
    {
        $municipalities = X_municipalities::orderBy('xxx_mncp_id','ASC')->paginate();
        return view ('municipalities.index',compact('municipalities'));
    }

    public function show($id){
        $municip = X_municipalities::find($id);
            return view('municipalities.show',compact('municip'));
    }
    
}