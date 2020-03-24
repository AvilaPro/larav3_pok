<?php

namespace LaraPok\Http\Controllers;

use Illuminate\Http\Request;
use LaraPok\Discipulo;
use LaraPok\Trainer;

class DiscipuloController extends Controller
{
    public function index(Trainer $trainer, Request $request){
        if($request->ajax()){
            $discipulos = $trainer->discipulos;
            return response()->json($discipulos, 200);
            //return response()->json($discipulos, 200);
            /* return response()->json([
                "trainer" => $trainer
            ], 200); */
            /* return response()->json([
                ['id' => 1, 'name' => 'Juan'],
                ['id' => 2, 'name' => 'Eduardo'],
                ['id' => 3, 'name' => 'Cesar'],
            ]); */
        }
        return view('discipulos.index');
    }

    public function store(Trainer $trainer, Request $request){
        if($request->ajax()){
            $discipulo = new Discipulo();
            $discipulo->name = $request->input('name');
            $discipulo->clase = $request->input('clase');
            $discipulo->picture = $request->input('picture');
            $discipulo->trainer()->associate($trainer)->save();
            //$discipulo->save();

            return response()->json([
                "trainer" => $trainer,
                "discipulo" => $discipulo,
                "message" => "Discipulo Creado Correctamente",
                //"discipulo" => $discipulo
            ], 200);
        }
    }
}
