@extends('layouts.app')

@section('title', 'Trainer')

@section('content')

    @include('common.success')

    <img style="height: 200px; width:200px; backgroud-color: #EFEFEF; margin:20px" src="/images/{{$trainer->avatar}}" alt="" class="card-img-top rounded-circle mx-auto d-block">
    <div class="text-center">
        <h5 class="card-title">{{$trainer->name}}</h5>
        <p>{{$trainer->description}} </p>
        <a href="/trainers/{{$trainer->slug}}/edit" class="btn btn-primary">Editar trainer</a>

        {!! Form::open([ 'route' => ['trainers.destroy', $trainer->slug], 'method' => 'DELETE']) !!}
            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>
    <contain-list></contain-list>
@endsection