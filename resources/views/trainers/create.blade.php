@extends('layouts.app')

@section('title', 'Trainer Create')

@section('content')

    {!!  Form::open(['route' => 'trainers.store', 'method' => 'POST', 'files' => true]) !!}
    {!! Form::close() !!}
    <form class="form-group" action="/trainers" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Nombre</label>
             <input type="text" name="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Descripcion</label>
             <input type="text" name="description" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Avatar</label>
            <input type="file" name="avatar">
        </div>
 
        <button type="submit" class="btn btn-primary">Guardar</button>

    </form>
    
    
@endsection


