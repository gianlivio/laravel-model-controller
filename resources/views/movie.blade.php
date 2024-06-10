@extends('layouts.app')


@section('content')

    <h1 class="fw-bold pt-5">Film</h1>


    <div class="d-flex flex-wrap gap-3">

        @foreach ($arrayMovie as $movie)

            <div class="card col-4" style="width: 18rem;">

                <img class="card-img-top" src="{{ $movie['image'] }}" alt="Card image cap">

                <div class="card-body">

                    <p class="card-text">Titolo: {{ $movie['title'] }}</p>
                    
                    <p class="card-text">Titolo: {{ $movie['vote'] / 2 }} / 5</p>

                </div>

            </div>

        @endforeach

    </div>

@endsection
