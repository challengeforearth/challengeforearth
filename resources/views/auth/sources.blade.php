@extends('layouts.signedout')

@section('content')


    <main id="yield">
        <div class="welcome-area" id="welcome">
            <div class="header-text">
                <div class="container">
                    <div class="row">
                        <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                            <h1>Les sources</h1>
                            <p class="challenge-metanumber-container">Voici la liste des sources utilisées avec leur description !</p>
                            <p>Le but est de recenser les organismes qui ont aidé de près ou de loin, directement ou non au projet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="section padding-top-70 padding-bottom-0" id="features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <img src="{{ asset('images/partenaires/ademe.jpg') }}" class="partners-logo" alt="Logo ADEME" />
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <div class="left-heading">
                            <h2 class="section-title text-center">L'ADEME</h2>
                        </div>
                        <div class="left-text text-justify">
                            <p class="description-black">
                                L'<strong>ADEME</strong> ou Agence de l'environnement et de la maîtrise de l'énergie,
                                est un établissement public à caractère industriel et commercial (EPIC) français créé en 1991. Elle affiche également le nom d'« Agence de la transition écologique ».</p>
                                <p class="description-black">Cette agence est régie par les articles L.131-3 à L.131-7 et R.131-1 à R.131-26 du Code de l’environnement.</p>
                                <p class="description-black">Il est placé sous la tutelle des ministères chargés de la Recherche et de l'Innovation, de la Transition écologique et solidaire, de l'Enseignement supérieur.</p>
                                <p class="description-black">L'ADEME suscite, anime, coordonne, facilite ou réalise des opérations de protection de l'environnement et la maîtrise de l'énergie, avec un budget de 690 millions d'euros en diminution (605 millions prévus en 2019) pour un effectif salarié de 963 équivalents temps-plein.</p>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <div class="left-heading">
                            <h2 class="section-title text-center">L'Association Bilan Carbone</h2>
                        </div>
                        <div class="left-text text-justify">
                            <p class="description-black">
                            L’Association Bilan Carbone (ABC) pilote actuellement une transformation profonde de son projet associatif.</p>
                            <p class="description-black">Entre 2011 et 2015, elle s’est appuyée sur l’expertise de ses parties prenantes pour développer et diffuser la méthodologie du Bilan Carbone® auprès des entreprises, des collectivités et des services de l’Etat. Après avoir formé plus de 8000 personnes, c’est en 2016 que le conseil d’administration de l’ABC a élargi l’objet des missions de l’association pour lui permettre de mieux répondre aux attentes et aux besoins de son écosystème.</p>
                            
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <img src="{{ asset('images/partenaires/abc.svg') }}" class="partners-logo" alt="Logo ABC" />
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection