@extends('layouts.app')

@section('title-page', "DC Comics - Comics")

@section('main-content')
    <div class="bg-light">
        <div class="containerSingle">
            <div>
                <h2>{{ $fumetto_singolo['title'] }}</h2>
                <label class="text-white" for="">U.s. Price: {{ $fumetto_singolo['price'] }}</label>
                
                <p id="description">{{ $fumetto_singolo['description'] }}</p>
            </div>
            <img src="{{ $fumetto_singolo['thumb']}}" class="" alt="...">
        </div>
    </div>

    <div class="containerBottom text-center">
        <div>
            <div>
                <H3 class="bg-light mb-0">SPECES</H3>
                <ul class="list-group">
                    <li class="list-group-item">Series: {{ $fumetto_singolo['series']}}</li>
                    <li class="list-group-item">U.S. Price: {{ $fumetto_singolo['price']}}</li>
                    <li class="list-group-item">On Sale Date: {{ $fumetto_singolo['sale_date']}}</li>
                  </ul>
            </div>
        </div>
    </div>
@endsection
