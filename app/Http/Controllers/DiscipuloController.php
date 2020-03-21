<?php

namespace LaraPok\Http\Controllers;

use Illuminate\Http\Request;
use LaraPok\Discipulo;

class DiscipuloController extends Controller
{
    public function index(Request $request){
        if($request->ajax()){
            $discipulos = Discipulo::all();
            return response()->json($discipulos, 200);
            /* return response()->json([
                ['id' => 1, 'name' => 'Juan'],
                ['id' => 2, 'name' => 'Eduardo'],
                ['id' => 3, 'name' => 'Cesar'],
            ]); */
        }
        return view('discipulos.index');
    }

    public function store(Request $request){
        if($request->ajax()){
            $discipulo = new Discipulo();
            $discipulo->name = $request->input('name');
            $discipulo->clase = $request->input('clase');
            $discipulo->picture = $request->input('picture');
            $discipulo->save();

            return response()->json([
                "message" => "Discipulo Creado Correctamente"
            ], 200);
        }
    }
}
