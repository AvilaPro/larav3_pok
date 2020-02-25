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
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
    
    
@endsection


