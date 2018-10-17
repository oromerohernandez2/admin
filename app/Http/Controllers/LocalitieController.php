<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\X_localities;
use App\Http\Requests\StateRequest;

class LocalitieController extends Controller
{
    public function index()
    {
        $localities = X_localities::orderBy('xxx_lclty_id','ASC')->paginate();
        return view ('localities.index',compact('localities'));
    }

    public function show($id){
        $localitie = X_localities::find($id);
            return view('localities.show',compact('localitie'));
    }
    
}