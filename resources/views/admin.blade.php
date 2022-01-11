@extends('layouts.signedin')

@section('content')

    <div class="welcome-area" id="welcome">
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                        <h1>Administration</h1>
                        <p>Créez des parcours, des défis, validez ces derniers et bien d'autres choses.
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
                            <a href="{{ route('dashboard.createchallenge') }}">    
                                <div class="features-small-item">
                                    <div class="icon">
                                        <i class="icons-challenge fas fa-plus-circle"></i>
                                    </div>
                                    <h5 class="features-title">Créer</h5>
                                    <p>Créez des défis et des parcours.</p>
                                </div>
                            </a>
                        </div>
                        <div class="position-relative col-lg-4 col-md-6 col-sm-6 col-12"></div>
                        <div class="position-relative col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                            <a href="{{ route('dashboard.managechallenge') }}">    
                                <div class="features-small-item">
                                    <div class="icon">
                                        <i class="icons-challenge fas fa-cogs"></i>
                                    </div>
                                    <h5 class="features-title">Gérer</h5>
                                    <p>Gérez les défis et les parcours déjà créés.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
