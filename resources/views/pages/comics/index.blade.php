@extends('layouts.app')

@section('title-page', "DC Comics - Comics")

@section('main-content')
    {{-- DOVE VANNO I FUMETTI --}}
    
    <div class="container">
        <div class="row">
            @foreach ($comics as $elem)
                <div class="col-2">
                    <div class="card" style="width: 10rem;">
                        <a href="">
                            <img src="{{ $elem['thumb']}}" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                        <h5 class="card-title">{{ $elem['title']}}</h5>
                        <!--<p class="card-text">{{ $elem['description']}}</p>-->
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection