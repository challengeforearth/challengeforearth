@extends('layouts.signedout')

@section('content')


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

            <section class="section" id="pricing-plans" data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
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

@endsection