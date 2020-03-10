@extends('layouts.app')

@section('title', 'Trainers')

@section('content')
    @if(session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="row">
        @foreach ($trainers as $trainer)
            <div class="col-sm">
                <div class="card text-center" style="width: 18rem; margin-top: 70px">
                <img style="height: 150px; width:150px; backgroud-color: #EFEFEF; margin:20px" src="images/{{$trainer->avatar}}" alt="" class="card-img-top rounded-circle mx-auto d-block">
                    <div class="card-body">
                      <h5 class="card-title">{{$trainer->name}}</h5>
                      <p class="card-text">{{$trainer->description}}</p>
                    <a href="/trainers/{{$trainer->slug}}" class="btn btn-primary">Conocer Mas</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
    
    
@endsection


