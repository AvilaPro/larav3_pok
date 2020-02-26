<?php

namespace LaraPok\Http\Controllers;

use LaraPok\Trainer;

use Illuminate\Http\Request;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainers = Trainer::all();
        return view('trainers.index', compact('trainers')); //creado en el cap 17 para asignar la vista que ahora planeamos mostrar.
        
        //return 'Hola desde el controlador Trainers'; //Tuvo su uso en e cap 10 para probar que el controlador funcionaba 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trainers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('avatar')){ //se verifica que se este pasando un archivo
            $file =$request->file('avatar');
            $name = time().$file->getClientOriginalName(); //Se le asigan un nombre unico
            $file->move(public_path().'/images/',$name); //Se guarda el archivo en nuestra carpeta public.
            //return $name;
        }
        //return $request; //cap 18 para ve que se esta enviando en el browser
        $trainer = new Trainer();
        $trainer->name = $request->input('name');
        $trainer->description = $request->input('description');
        $trainer->avatar = $name;
        $trainer->save();

        return 'Saved'; //Comentario hecho en el cap 18. Para tratar o manipular lo recibido.
        //return $request->input('name'); //Con esto solo vemos el atributo del input que llamamos name
        //return $request->all();//Esto para visualizar el objeto en si que se esta pasando.
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Trainer $trainer) //Definido el Implicit Binding en el controlador
    {
        //$trainer = Trainer::where('slug','=',$slug)->firstOrFail(); //agregado cap 21
        //$trainer = Trainer::find($id);
        //return $trainer;
        return view('trainers.show', compact('trainer'));
        //return 'tengo que retornar el recurso con el id '.$id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
        return view('trainers.edit', compact('trainer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainer $trainer)
    {
                            //agregados cap 23
        //return $trainer; //agregado para ver que si estaba llegando el trainer actualizado
        //return $request; //con esto verificamos que correctamente este ejecutando el metodo PUT.
        
        $trainer->fill($request->except('avatar'));
        if($request->hasFile('avatar')){ //se verifica que se este pasando un archivo
            $file =$request->file('avatar');
            $name = time().$file->getClientOriginalName(); //Se le asigan un nombre unico
            $trainer->avatar = $name;
            $file->move(public_path().'/images/',$name); //Se guarda el archivo en nuestra carpeta public.
        }
        $trainer->save();
        return 'actualizado';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
