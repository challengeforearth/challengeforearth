@extends('layouts.signedin')

@section('content')

    <div class="welcome-area" id="welcome">
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                        <h1>Mon convertisseur CO2</h1>
                        <p>Pour vous accompagner au mieux et vous donner des ordres de grandeur, ce simulateur propose de comparer ce qui correspond à 2 tonnes d'eqCO2 !</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script id="datagir-mon-convertisseur-co2" src="https://monconvertisseurco2.fr/iframe.js" data-search="?theme=simple"></script>
@endsection
