@extends('layouts.signedin')

@section('content')

    <div class="welcome-area" id="welcome">
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                        <h1>Tableau de bord</h1>
                        <p>Le tableau de bord te permets d'accéder rapidement aux éléments importants, comme
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
                        
                        
                        @foreach ($journeys as $journey)
                            <div class="position-relative col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                                <a href="/journey/show/{{$journey->journeyid}}">    
                                    <div class="features-small-item">
                                        <div class="icon">
                                            <i class="icons-challenge {{ $journey->icon }}"></i>
                                        </div>
                                        <h5 class="features-title">{{ $journey->title }}</h5>
                                        <p class="green mb-4">-{{ $journey->level }}-</p>
                                        <p>{{ $journey->description }}</p>
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
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item decoration-bottom">
                            <strong>126</strong>
                            <span>Projects</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item decoration-top">
                            <strong>63</strong>
                            <span>Happy Clients</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item decoration-bottom">
                            <strong>18</strong>
                            <span>Awards Wins</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item">
                            <strong>27</strong>
                            <span>Countries</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
