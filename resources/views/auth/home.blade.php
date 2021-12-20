<!DOCTYPE html>
<html lang="fr">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>Challenge For Earth</title>

    <!-- Additional CSS Files -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('theme/css/template.css') }}">

    </head>
    
    <body class="home">
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">
                            <img src="{{ asset('images/logo.png') }}" width="50" alt="Challenge for earth"/>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="/" class="active">Accueil</a></li>
                            <li><a href="/sources">Sources</a></li>
                            <li><a href="https://blog.floriandoyen.fr">Blog</a></li>
                            <li><a href="/connect">Se connecter</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>


    <main id="yield">
        <div class="welcome-area" id="welcome">
            <div class="header-text">
                <div class="container">
                    <div class="row">
                        <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                            <h1>Rejoins la communauté de Challenge For Earth</h1>
                            <p class="challenge-metanumber-container">Deviens un <strong>challenger</strong></p>
                            <p>et réalise des parcours de défis variés</p>
                            <a href="https://discord.gg/vU7jwSQW" class="btn-discord"><i class="fa-brands fa-discord"></i> VIENS ON EST SUR DISCORD</a>
                            <div class="mt-5">
                                <p class="count-item">
                                    <strong class="kgeqCO2nbr">{{$kgeqCO2all}}</strong><sub class="kgeqCO2nbr-sub">kgeqCO2</sub>
                                    <br />évité grâce au <b>challengers</b> !
                                </p>
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
                            <i class="fa-solid fa-hand-fist d-block mx-auto big-icon"></i>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                            <div class="left-heading">
                                <h2 class="section-title text-center">Qu'est-ce que <i>Challenge For Earth</i> ?</h2>
                            </div>
                            <div class="left-text text-justify">
                                <p class="description-black">
                                    <strong>Challenge For Earth</strong> n'est que la première pierre d'un écosystème
                                    d'outils d'aide à la prise de décision écologique. Ce projet est apparu comme une évidence il y a trois ans, après
                                    avoir lu de nombreuses choses sur les catastrophes environnementales passées, en cours et surtout, à venir. Chaque +0.1°C compte, chaque
                                    déchet dans la nature compte, chaque aliment gaspillé compte, pour les générations actuelles mais surtout futures, agissons.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                            <div class="left-heading">
                                <h2 class="section-title text-center">Protéger l'environnement</h2>
                            </div>
                            <div class="left-text text-justify">
                                <p class="description-black">
                                    <strong>Le but</strong> est d'éduquer et de sensibiliser le plus de personnes possibles via des défis qui permettent
                                    d'agir au quotidien. Chaque défi est accompagné d'explications afin de vous aider au mieux !
                                </p>
                                <p class="description-black">
                                    Nous n'avons qu'une planète, il est désormais temps d'agir ensemble pour que le monde de demain soit plus radieux.
                                </p>
                                
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                            <i class="fa-solid fa-leaf d-block mx-auto big-icon"></i>
                        </div>
                    </div>
                </div>
            </section>

            <section class="counter">
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="count-item decoration-bottom">
                                    <strong>{{$kgeqCO2all}}</strong>
                                    <span>kgeqCO2 évité</span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="count-item decoration-top">
                                    <strong>{{$nbChallenges}}</strong>
                                    <span>Défis réalisés</span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="count-item decoration-bottom">
                                    <strong>{{$challengers}}</strong>
                                    <span>challengers</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section colored" id="pricing-plans" data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="center-heading">
                            <h2 class="section-title">Des parcours pour tous les goûts</h2>
                        </div>
                    </div>
                    <div class="offset-lg-3 col-lg-6">
                        <div class="center-text">
                            <p class="description-black">
                                Challenge For Earth propose des parcours de défis variés, pour les adultes comme pour les enfants
                            </p>
                            <p class="description-black">
                                Des parcours adapté et simplifié pour les enfants, des parcours plus complets pour les adultes. dans
                                les deux cas, l'objectif est de sensibiliser aux différents enjeux environnementaux par des actions
                                concrètes !
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="social">
                        <li><a href="https://www.linkedin.com/company/challengeforearth"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a href="https://www.instagram.com/challenge_for_earth"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="https://www.facebook.com/challengeforearth/"><i class="fa-brands fa-facebook-f"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="copyright">Copyright &copy; 2022 Challenge For Earth - Design: TemplateMo</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{ asset('theme/js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('theme/js/popper.js') }}"></script>
    <script src="{{ asset('theme/js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('theme/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('theme/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('theme/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('theme/js/imgfix.min.js') }}"></script> 

    <!-- Global Init -->
    <script src="{{ asset('theme/js/custom.js') }}"></script>
    <script src="{{ asset('theme/js/api.js') }}"></script>

    </body>
    </html>
