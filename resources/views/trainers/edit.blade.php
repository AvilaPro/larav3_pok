@extends('layouts.app')
@section('title', 'Trainer Edit')
@section('content')

{!! Form::model($trainer, ['route' => ['trainers.update', $trainer], 'method' => 'PUT', 'files' => true]) !!}
    {!! Form::token() !!} 
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description', 'Description') !!}
            {!! Form::text('description', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Avatar Actual: ', 'Avatar') !!}
            <img style="height: 200px; width:200px; backgroud-color: #EFEFEF; margin:20px" src="/images/{{$trainer->avatar}}" alt="" class="card-img-top rounded-circle mx-auto d-block">
            {!! Form::label('avatar', 'Avatar') !!}
            {!! Form::file('avatar') !!}
        </div>

        {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
{!! Form:: close() !!}

{{-- <form class="form-group" action="/trainers/{{$trainer->slug}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="">Nombre</label>
        <input type="text" name="name" class="form-control" value="{{$trainer->name}}">
        </div>

        <div class="form-group">
            <label for="">Descripcion</label>
             <input type="text" name="description" class="form-control" value="{{$trainer->description}}">
        </div>

        <div class="form-group">
            <label for="">Avatar Actual</label>
            <img style="height: 200px; width:200px; backgroud-color: #EFEFEF; margin:20px" src="/images/{{$trainer->avatar}}" alt="" class="card-img-top rounded-circle mx-auto d-block">
            <label for="">Modificar Avatar:</label>
            <input type="file" name="avatar">
        </div>
 
        <button type="submit" class="btn btn-primary">Actualizar</button>

    </form> --}}
@endsection