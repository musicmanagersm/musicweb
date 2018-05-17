@extends('layouts.app')

@section('title', 'Songs')

@section('content')

    <div style="margin: 50px" class="row">
        @foreach($songs as $song)
            <div class="col-sm">
                <div class="card text-center" style="width: 18rem;margin-top: 50px;">
                    <img style="height: 150px; width: 150px;background-color: #EFEFEF;margin: 20px;" class="card-img-top rounded-circle mx-auto d-block" src="images/{{$song->avatar}}" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{$song->nombre}}</h5>
                        <p class="card-text">{{$song->artista}}</p>
                        <a href="#" class="btn btn-primary">Ver Detalles</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>



@endsection