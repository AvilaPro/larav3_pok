<?php

namespace LaraPok\Http\Controllers;

use Illuminate\Http\Request;

class DiscipuloController extends Controller
{
    public function index(){
        return view('discipulos.index');
    }
}
