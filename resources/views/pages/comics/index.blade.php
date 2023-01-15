@extends('layouts.app')

@section('title-page', "DC Comics - Comics")

@section('main-content')
    {{-- DOVE VANNO I FUMETTI --}}
    
    <div class="container">
        <div class="row">
            @foreach ($comics as $id => $elem)
                <div class="col-2">
                    <div class="card" style="width: 10rem;">

                        <a href="{{route('show.comics', ['id' => 'id'])}}">
                            <img src="{{ $elem['thumb']}}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">{{ $elem['title']}}</h5>
                        </a>
                        <!--<p class="card-text">{{ $elem['description']}}</p>-->
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection