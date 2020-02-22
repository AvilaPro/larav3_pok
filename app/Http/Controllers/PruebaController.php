<?php

namespace LaraPok\Http\Controllers;

use LaraPok\Http\Controllers\Controller; //Por eso de la erencia se incluye esto

class PruebaController extends Controller{ //Recordar que esta clase hereda de Controller
    /* public function prueba(){
        return 'Estoy dentro de PruebController XD'; 
    Con este verificamos que entre correctamente a la funcion y al controlador*/
    public function prueba($param){
        return 'Estoy dentro de PruebController recibo este parametro '.$param;
        //esta func ya recibe parametros que se pueden pasar por el metodo get de la ruta.
    }
}