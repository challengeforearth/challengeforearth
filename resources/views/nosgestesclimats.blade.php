@extends('layouts.signedin')

@section('content')

    <div class="welcome-area" id="welcome">
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                        <h1>Nos Gestes Climats</h1>
                        <p>La première étape pour avancer, c'est d'utiliser le simulateur ci-dessous pour connaître son empreinte carbone !</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <iframe id="iframenosgestesclimats" src="https://nosgestesclimat.fr/"
    frameborder="0" 
    marginheight="0" 
    marginwidth="0" 
    width="100%" 
    height="100%" 
    scrolling="auto">
        <p>Votre navigateur ne supporte aucune iframe !</p>
    </iframe>
@endsection
