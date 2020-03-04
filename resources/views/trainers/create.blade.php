@extends('layouts.app')

@section('title', 'Trainer Create')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!!  Form::open(['route' => 'trainers.store', 'method' => 'POST', 'files' => true]) !!}
        {{-- Esto para el csrf. --}}
        {!! Form::token() !!} 

        @include('trainers.form')

        {{-- Esto fue comentado en el cap 25 para ver sub views --}}
        {{-- <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description', 'Description') !!}
            {!! Form::text('description', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('avatar', 'Avatar') !!}
            {!! Form::file('avatar') !!}
        </div> --}}

        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
    {{-- <form class="form-group" action="/trainers" method="POST" enctype="multipart/form-data">
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

    </form> --}}
    
    
@endsection


