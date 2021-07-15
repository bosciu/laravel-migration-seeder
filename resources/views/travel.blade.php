@extends('templates.main_template')
@section('title', 'Viaggi')
@section('css')
    @parent
    <link rel="stylesheet" href="css/_travel.css">
@endsection
@section('main')
    <main>
        <div class="container">
            @foreach ($packages as $package)
                <div class="card">
                    <div class="img-container">
                        <img src="{{$package->img_url}}" alt="">
                    </div>
                    <h1>{{$package->title}}</h1>
                    <p>{{$package->description}}</p>
                    <h2>Prezzo: {{$package->price}} €</h2>
                    <h3>Località: {{$package->location}}</h3>
                    <h4>Periodo: {{$package->date}}</h4>
                </div>
            @endforeach
        </div>
    </main>
@endsection