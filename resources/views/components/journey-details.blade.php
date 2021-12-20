@extends('challenge::layouts.master')
@include("socialhub::components.navbar")
@include('challenge::components.filter')
@section('content')
    <div class="journey-details">
        <div class="journey-intro">
                <h4 class="journey-title">{{$journey->title}}</h4>
                <p class="journey-description">{{$journey->description}}</p>
                <form action="{{route('journey.launch',['id'=>$journey->journeyid])}}" method="GET" class="accept-journey">
                    @csrf
                    <button type="submit" class="btn-status btn-success">

                        <i class="ri-earth-line"></i>Relever les challenges</button>
                </form>
        </div>
    </div>
    <main class="journeys-challenge-list">
            @each('challenge::components.journey-challenge', $challenges,'challenge')
    </main>
@endsection
