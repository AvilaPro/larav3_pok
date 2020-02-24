@extends('layouts.app')

@section('title', 'Trainer Create')

@section('content')
    <form class="form-group" action="/trainers" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Nombre</label>
             <input type="text" name="name" class="form-control">
        </div>
 
        <button type="submit" class="btn btn-primary">Guardar</button>

    </form>
    
    
@endsection


