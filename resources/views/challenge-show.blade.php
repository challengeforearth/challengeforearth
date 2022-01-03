@extends('layouts.signedin')

@section('content')

    <div class="welcome-area" id="welcome">
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                        <h1>{{ $challenge->title }}</h1>
                        <p>{!! $challenge->description !!}</p>


                        <div class="d-flex justify-content-between align-items-end">
                            <div class="challenge-metanumber-container">
                                <p class="challenge-metanumber">-{{$challenge->kgeqCO2}}</p>
                                <h5 class="text-white">kgeqCO2</h5>
                            </div>
                            @if($challenge->badge)
                                <div class="text-center">
                                    <img style="
                                    @if($challenge->badge->earned === 1)
                                    opacity: 0.2;
                                    @endif
                                    " src="/images/badges/{{$challenge->badge->imagename}}"
                                    width=100 height=100 alt="{{ $challenge->badge->title }}" />
                                    
                                    <h5 class="text-white">Badge "{{ $challenge->badge->name }}"</h5>
                                    </div>
                                </div>
                            @endif
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section padding-top-70 padding-bottom-0" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <i class="far fa-lightbulb d-block mx-auto big-icon"></i>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="left-heading">
                        <h2 class="section-title h2-challenge">Quelques conseils
                            <a href="{{$challenge->source}}" target="_blank">&nbsp;<i class="fas fa-info-circle "></i></a>
                        </h2>
                    </div>
                    <div class="left-text text-justify">
                        <div class="description-black">{!! $challenge->howto !!}</div>
                        <p class="badge-description">{{$challenge->level}} - {{$challenge->category}} - {{$challenge->expawarded}}<sup><em>xp</em></sup></p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-around mb-5 align-self-center mobile-top-fix" data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                    <button id="challengeaccepted" type="button" class="btn 
                    @if($challenge->status == 1)
                        btn-orange
                    @else
                        btn-green
                    @endif
                     btn-rounded btn-icon">
                        <i class="fas 
                    @if($challenge->status == 2)
                        fa-check
                    @else
                        fa-fist-raised
                    @endif
                    "></i>
                    </button>
                    <a href="{{ route('dashboard.home') }}" id="challengerefused" type="button" class="d-flex justify-content-center align-items-center btn btn-red btn-rounded btn-icon">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-around mb-5 align-self-center mobile-top-fix" data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                    <p id="challengetext" class="left-text">
                    @if($challenge->status == 1)
                        Défi en cours
                    @elseif($challenge->status == 2)
                        Défi relevé !
                    @else
                        Je relève le défi
                    @endif
                    
                    </p>
                    <p id="challengeid" style="display:none;">{!! $challenge->challengeid !!}</p>
                    <p class="left-text">Je le ferai plus tard</p>
                </div>
            </div>
        </div>
    </section>

@endsection
