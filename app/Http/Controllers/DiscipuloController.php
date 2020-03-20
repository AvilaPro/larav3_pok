<?php

namespace LaraPok\Http\Controllers;

use Illuminate\Http\Request;

class DiscipuloController extends Controller
{
    public function index(Request $request){
        if($request->ajax()){
            return response()->json([
                ['id' => 1, 'name' => 'Juan'],
                ['id' => 2, 'name' => 'Eduardo'],
                ['id' => 3, 'name' => 'Cesar'],
            ]);
        }
        return view('discipulos.index');
    }
}
