@extends('layouts.app')

@section('title', 'Trainers')

@section('content')
    <div class="row">
        @foreach ($trainers as $trainer)
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                <img src="images/{{$trainer->avatar}}" alt="" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">{{$trainer->name}}</h5>
                      <p class="card-text">{{$trainer->description}}</p>
                      <a href="#" class="btn btn-primary">Conocer Mas</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
    
    
@endsection


