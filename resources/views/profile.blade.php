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
    <section class="section home-feature mt-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <p class="description-black text-center">Niveau {{$user->level}}</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: {{$user->xp}}%" aria-valuenow="{{$user->xp}}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="description-black text-center">Expérience {{$user->xp}}/100</p>
                </div>
                <div class="col-lg-4"></div>
                <div class="col-lg-12">
                    <h3 class="text-center my-5">Défis en cours</h3>
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

    <section class="section rgpd">
        <h3 class="text-center mb-3">Vos données personnelles</h3>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <button type="button" class="btn btn-full-green" data-toggle="modal" data-target="#RGPDdownloadModal">
                            Télécharger mes données
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- Modal -->
<div class="modal fade" id="RGPDdownloadModal" tabindex="-1" role="dialog" aria-labelledby="RGPDdownloadModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body p-3">
                <h5 class="modal-title" id="RGPDdownloadModalLabel">Règlementation RGPD</h5>
                <section class="section text-center">
                    <form action="/dashboard/rgpd/download" method="post">
                        @csrf
                        <p class="description-black">Veuillez confirmer votre mot de passe</p>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fa fa-asterisk"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-full-green">Télécharger</button>
                    </form>
                </section>
                <div class="modal-footer">
                    <button type="button" class="btn btn-green" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
