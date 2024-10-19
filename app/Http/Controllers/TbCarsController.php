<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\tbCars;

class TbCarsController extends Controller
{
    public function MostrarHome(){
        return view('home');
    }

    public function MostrarCadastroCar(){
        return view('cadastroCarro');
    }

    public function CadastrarCar(Request $request){
        $registros = $request->validate([
            'nomeCar'=>'string|required',
            'modeloCar'=>'string|required',
            'anoCar'=>'string|required',
        ]);

        tbCars::create($registros);
        return Redirect::route('home-winx');
    }

    public function Destroy(tbCars $id){
        $id->delete();
        return Redirect::route('home-winx');
    }

    public function Update(tbCars $id, Request $request){
        $registros = $request->validate([
            'nomeCar'=>'string|required',
            'modeloCar'=>'string|required',
            'anoCar'=>'string|required',
        ]);
        $id->fill($registros);
        $id->save();

        return Redirect::route('home-car');
    }

    public function MostrarCarCodigo(tbCars $id){
        return view("altera-car",['registrosCars'=>$id]);
    }

    public function MostrarCarNome(Request $request){
        $registros = tbCars::query();
        $registros->when($request->nomeCar,function($query, $valor){
            $query->where('nomeCar', 'like', '%'.$valor.'%');
        });
        $todosRegistros = $registros->get();
        return view('lista-car',['registrosCars'=>$todosRegistros]);
    }
}
