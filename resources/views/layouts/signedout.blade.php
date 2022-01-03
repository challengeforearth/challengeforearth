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
                            <li><a href="/">Accueil</a></li>
                            <li><a href="/sources">Sources</a></li>
                            <li><a href="https://blog.challengeforearth.com">Blog</a></li>
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
    <!-- ***** Header Area End ***** -->
    <button type="button" class="btn btn-green px-4 py-3" id="ideaPopupBtn" data-toggle="modal" data-target="#ideaPopup">
        <i class="far fa-lightbulb"></i>
    </button>


    <main id="yield">
        @yield('content')
    </main>

    <div class="modal fade" id="ideaPopup" tabindex="-1" role="dialog" aria-labelledby="Got an idea ?" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content rounded-0">
                <div class="modal-body p-4 px-5">
                    <div class="main-content text-center">
                        <a href="#" class="close-btn" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                <span class="fas fa-times"></span>
                            </span>
                        </a>
                        <div class="warp-icon mb-4">
                            <span class="fas fa-lightbulb"></span>
                        </div>
                        <form action="#">
                            <input style="display: none;" id="csrf-token" value="{{ csrf_token() }}">
                            <label for="">Une idée ? Une remarque ? </label>
                            <div class="form-group mb-4">
                                <input id="ideaMessage" type="text" class="form-control text-center" placeholder="">
                            </div>
                            <div class="d-flex">
                                <div class="mx-auto">
                                    <button id="ideaBtnSend" class="btn link-green">Envoyer</button>
                                </div>
                            </div>
                            <p id="ideaResult"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
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
                    <p class="copyright">Copyright &copy; 2022 Challenge For Earth</p>
                </div>
                <div class="col-lg-12 text-center">
                    <a class="text-white" href="{{ route('mentionslegales') }}">Mentions légales</a>
                    <span class="text-white">&nbsp;-&nbsp;</span>
                    <a class="text-white" href="{{ route('conditionsgenerales') }}">Conditions générales</a>
                    <span class="text-white">&nbsp;-&nbsp;</span>
                    <a class="text-white" href="{{ route('politiqueconfidentialite') }}">Politique de confidentialité</a>
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
