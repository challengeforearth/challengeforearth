@extends('layouts.signedin')

@section('css')
    <link href="{{ asset('theme/css/badges.css') }}" rel="stylesheet">
@endsection

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
                                    <div class="">
                                        <div class="badges text-center">
                                            <div class="animated_badge animated_badge_5">
                                                <div class="animated_stars">
                                                    <div class="animated_star plus"></div>
                                                    <div class="animated_star donut yellow"></div>
                                                    <div class="animated_star plus"></div>
                                                    <div class="animated_star donut"></div>
                                                    <div class="animated_star plus yellow"></div>
                                                </div>
                                                <svg class="animated_badge_svg" width="84" height="99" viewBox="0 0 84 99" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path class="badge_ribbon"
                                                        d="M0.761166 82.9447L17.3041 50.8886C17.5574 50.3979 18.1606 50.2053 18.6513 50.4586L43.875 63.4756C44.3658 63.7289 44.5583 64.332 44.305 64.8228L27.7788 96.8466C27.4294 97.5236 26.4817 97.5769 26.0586 96.9435L17.8756 84.694C17.6881 84.4133 17.3716 84.2461 17.0341 84.2495L1.65981 84.4033C0.906487 84.4108 0.415676 83.6142 0.761166 82.9447Z"
                                                        fill="#F04152" />
                                                    <path class="badge_ribbon"
                                                        d="M0.761166 82.9447L17.3041 50.8886C17.5574 50.3979 18.1606 50.2053 18.6513 50.4586L43.875 63.4756C44.3658 63.7289 44.5583 64.332 44.305 64.8228L27.7788 96.8466C27.4294 97.5236 26.4817 97.5769 26.0586 96.9435L17.8756 84.694C17.6881 84.4133 17.3716 84.2461 17.0341 84.2495L1.65981 84.4033C0.906487 84.4108 0.415676 83.6142 0.761166 82.9447Z"
                                                        fill="url(#paint0_linear)" />
                                                    <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="1" y="50" width="44" height="46">
                                                        <path
                                                            d="M3.80623 77.0441L15.4697 54.4432C16.7361 51.9893 19.752 51.0266 22.2059 52.293L40.3204 61.6412C42.7743 62.9076 43.737 65.9235 42.4707 68.3774L30.8904 90.817C29.1437 94.2016 24.4052 94.4685 22.2895 91.3014L19.0777 86.4935C18.1402 85.09 16.5578 84.2543 14.8701 84.2712L8.29946 84.3369C4.53283 84.3745 2.07879 80.3915 3.80623 77.0441Z"
                                                            fill="#71A1F4" />
                                                        <path
                                                            d="M3.80623 77.0441L15.4697 54.4432C16.7361 51.9893 19.752 51.0266 22.2059 52.293L40.3204 61.6412C42.7743 62.9076 43.737 65.9235 42.4707 68.3774L30.8904 90.817C29.1437 94.2016 24.4052 94.4685 22.2895 91.3014L19.0777 86.4935C18.1402 85.09 16.5578 84.2543 14.8701 84.2712L8.29946 84.3369C4.53283 84.3745 2.07879 80.3915 3.80623 77.0441Z"
                                                            fill="url(#paint1_linear)" />
                                                    </mask>
                                                    <g class="badge_ribbon" mask="url(#mask0)">
                                                        <rect width="9.73445" height="46.9502" transform="matrix(0.894023 0.448022 -0.445194 0.895434 24.272 60.4499)"
                                                            fill="#FCD977" />
                                                    </g>
                                                    <path class="badge_ribbon right"
                                                        d="M56.5365 97.1074L38.5 65.8673C38.2239 65.389 38.3877 64.7774 38.866 64.5013L63.4476 50.3091C63.9259 50.0329 64.5375 50.1968 64.8137 50.6751L82.832 81.8838C83.2129 82.5435 82.7458 83.3698 81.9841 83.3836L67.2552 83.6511C66.9177 83.6572 66.6061 83.8332 66.4266 84.1191L58.2494 97.1392C57.8487 97.7772 56.9132 97.7598 56.5365 97.1074Z"
                                                        fill="#F04152" />
                                                    <path class="badge_ribbon right"
                                                        d="M56.5365 97.1074L38.5 65.8673C38.2239 65.389 38.3877 64.7774 38.866 64.5013L63.4476 50.3091C63.9259 50.0329 64.5375 50.1968 64.8137 50.6751L82.832 81.8838C83.2129 82.5435 82.7458 83.3698 81.9841 83.3836L67.2552 83.6511C66.9177 83.6572 66.6061 83.8332 66.4266 84.1191L58.2494 97.1392C57.8487 97.7772 56.9132 97.7598 56.5365 97.1074Z"
                                                        fill="url(#paint2_linear)" />
                                                    <mask id="mask1" mask-type="alpha" maskUnits="userSpaceOnUse" x="38" y="49" width="45" height="47">
                                                        <path
                                                            d="M53.2165 91.357L40.5 69.3314C39.1193 66.9399 39.9387 63.882 42.3301 62.5013L59.9835 52.3091C62.375 50.9283 65.4329 51.7477 66.8137 54.1392L79.4394 76.0076C81.3438 79.3061 79.0082 83.4376 75.2001 83.5068L69.419 83.6118C67.7314 83.6424 66.1732 84.5224 65.2756 85.9517L61.7808 91.5162C59.7774 94.7061 55.0999 94.6192 53.2165 91.357Z"
                                                            fill="#71A1F4" />
                                                        <path
                                                            d="M53.2165 91.357L40.5 69.3314C39.1193 66.9399 39.9387 63.882 42.3301 62.5013L59.9835 52.3091C62.375 50.9283 65.4329 51.7477 66.8137 54.1392L79.4394 76.0076C81.3438 79.3061 79.0082 83.4376 75.2001 83.5068L69.419 83.6118C67.7314 83.6424 66.1732 84.5224 65.2756 85.9517L61.7808 91.5162C59.7774 94.7061 55.0999 94.6192 53.2165 91.357Z"
                                                            fill="url(#paint3_linear)" />
                                                    </mask>
                                                    <g class="badge_ribbon right" mask="url(#mask1)">
                                                        <rect width="9.73445" height="46.9502" transform="matrix(0.860033 -0.510239 0.512954 0.858416 50.3103 65.1699)"
                                                            fill="#FCD977" />
                                                    </g>
                                                    <circle cx="40.5" cy="37.5" r="33.5" fill="#DBDFE7" stroke="#FCD977" stroke-width="8" />
                                                    <circle class="badge_circle" cx="40.5" cy="37.5" r="29.5" fill="#FCD977" stroke="#FFA826" stroke-width="4" />
                                                    <defs>
                                                        <linearGradient id="paint0_linear" x1="31.2632" y1="56.9671" x2="13.7695" y2="90.8654"
                                                            gradientUnits="userSpaceOnUse">
                                                            <stop stop-color="#A31523" />
                                                            <stop offset="1" stop-color="#F04152" stop-opacity="0" />
                                                        </linearGradient>
                                                        <linearGradient id="paint1_linear" x1="31.2632" y1="56.9671" x2="13.7695" y2="90.8654"
                                                            gradientUnits="userSpaceOnUse">
                                                            <stop stop-color="#27539F" />
                                                            <stop offset="1" stop-color="#71A1F4" stop-opacity="0" />
                                                        </linearGradient>
                                                        <linearGradient id="paint2_linear" x1="51.1568" y1="57.4052" x2="70.2299" y2="90.4407"
                                                            gradientUnits="userSpaceOnUse">
                                                            <stop stop-color="#A31523" />
                                                            <stop offset="1" stop-color="#F04152" stop-opacity="0" />
                                                        </linearGradient>
                                                        <linearGradient id="paint3_linear" x1="51.1568" y1="57.4052" x2="70.2299" y2="90.4407"
                                                            gradientUnits="userSpaceOnUse">
                                                            <stop stop-color="#27539F" />
                                                            <stop offset="1" stop-color="#71A1F4" stop-opacity="0" />
                                                        </linearGradient>
                                                    </defs>
                                                </svg>
                                                <p class="mt-3 icon-badge">
                                                <i class="mb-2 {{$challenge->badge->imagename}}"></i></p>
                                            </div>
                                        </div>
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
