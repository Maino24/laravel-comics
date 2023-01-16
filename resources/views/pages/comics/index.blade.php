@extends('layouts.app')

@section('title-page', "DC Comics - Comics")

@section('main-content')
    {{-- DOVE VANNO I FUMETTI --}}
    
    <div class="container">
        <div class="row">
            @foreach ($comics as $id => $elem)
                <div class="col-2 p-5">
                    <div class="card" style="width: 10rem;">

                        <a class="" href="{{route('show.comics', ['id' => $id])}}">
                            <img src="{{ $elem['thumb']}}" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title" style="height: 7rem;">{{ $elem['title']}}</h5>
                        </a>
                        
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection