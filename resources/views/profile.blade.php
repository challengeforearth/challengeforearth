@extends('layouts.signedin')

@section('content')

    <div class="welcome-area" id="welcome">
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                        <h1>Profil</h1>
                        <p>Bonjour {{ $user->firstname }} ! Ton profil te donne un aperçu plus personnel de tes efforts, comme
                            un résumé de tes badges, de tes statistiques, de tes défis en cours...
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section home-feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        @if(count($challengesWIP) === 0)
                        <div class="pusher"></div>
                        @endif
                        @foreach ($challengesWIP as $challenge)
                            <div class="position-relative col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                                <a href="/challenge/show/{{$challenge->challengeid}}">
                                    <div class="features-small-item">
                                        <p><i>En cours</i></p>
                                        <div class="icon">
                                            <i class="icons-challenge {{ $challenge->icon }}"></i>
                                        </div>
                                        <h5 class="features-title">{{ $challenge->title }}</h5>
                                        <p class="green mb-4">-{{ $challenge->level }}-</p>
                                        <p>{!! $challenge->description !!}</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="counter">
        <h3 class="text-center mt-5">Vos statistiques</h3>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="count-item decoration-bottom">
                            <strong>{{ $kgeqCO2 }}</strong>
                            <span>kgeqCO2 évité, bravo !</span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="count-item decoration-top">
                            <strong>{{ $nbChallenges }}</strong>
                            <span>Défis réalisés</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="pusher"></div>

    <section class="section home-feature">
        <h3 class="text-center mb-3">Vos badges</h3>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        @foreach ($badges as $badge)
                            <div class="badge-container text-center col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                                <div>
                                    <img style="
                                    @if($badge->earned === 0)
                                    opacity: 0.3;
                                    @endif
                                    " src="/images/badges/{{$badge->imagename}}"
                                    width=100 height=100 alt="{{ $badge->title }}" />
                                    
                                    <h5 class="badge-title">{{ $badge->name }}</h5>
                                    <p class="badge-description mb-4">{{ $badge->description }}</p>
                                    </div>
                                </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
