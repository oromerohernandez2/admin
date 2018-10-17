<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\X_status;
use App\Http\Requests\StatusRequest;

class StatusController extends Controller
{
    public function index()
    {
        $status = X_status::orderBy('xxx_stas_id','ASC')->paginate();
        return view ('status.index',compact('status'));
    }

    public function create(){
        return view('status.create');
    }

    public function store(StatusRequest $request){
        $statu = new X_status;
        $statu->xxx_stas_id = $request->xxx_stas_id;
        $statu->xx_stas_name = $request->xx_stas_name;
        $statu->xx_stas_description = $request->xx_stas_description;
        $statu->save();
        return Redirect()->route('status.index')->with('info', 'El status ha sido guardado');
    }

    public function update(StatusRequest $request, $id){
        $statu = X_status::find($id);
        $statu->xxx_stas_id = $request->xxx_stas_id;
        $statu->xx_stas_name = $request->xx_stas_name;
        $statu->xx_stas_description = $request->xx_stas_description;
        $statu->save();
        return Redirect()->route('status.index')->with('info', 'El status fue actualizado');
    }

    public function edit($id){
        $statu = X_status::find($id);
        return view('status.edit',compact('statu'));
    }

    public function show($id){
        $statu = X_status::find($id);
            return view('status.show',compact('statu'));
    }

    public function destroy($id){
        $statu = X_status::find($id);
        $statu->delete();
            return back()->with('info', 'El status fue eliminado');
    }
    
}