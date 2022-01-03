@extends('layouts.signedin')

@section('content')

    <div class="welcome-area" id="welcome">
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                        <h1>Tableau de bord</h1>
                        <p>Le tableau de bord te permet d'accéder rapidement aux éléments importants, comme
                            les parcours pas encore réalisés, des statistiques rapides ou tes notifications.
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
                        <div class="position-relative col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                            <a href="/dashboard/nosgestesclimats/">    
                                <div class="features-small-item">
                                    <div class="icon">
                                        <i class="icons-challenge fas fa-list-alt"></i>
                                    </div>
                                    <h5 class="features-title">Le simulateur</h5>
                                    <p>Simulez vos émissions de CO2 avec le simulateur de l'ADEME</p>
                                </div>
                            </a>
                        </div>
                        <div class="position-relative col-lg-4 col-md-6 col-sm-6 col-12"></div>
                        <div class="position-relative col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                            <a href="/journey/">    
                                <div class="features-small-item">
                                    <div class="icon">
                                        <i class="icons-challenge fas fa-map-signs"></i>
                                    </div>
                                    <h5 class="features-title">Les parcours</h5>
                                    <p>Choisissez un parcours et réalisez des défis à ton rythme !</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="counter">
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
@endsection
