@extends('layouts.signedin')

@section('css')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">
@endsection

@section('content')

    <div class="welcome-area" id="welcome">
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                        <h1>Créer</h1>
                        <p>Créez ici votre parcours ou votre défi !
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

                    <!-- Create the editor container -->
                    <div id="editor";>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')

    <!-- Include the Quill library -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>

    <!-- Initialize Quill editor -->
    <script>
        $(document).ready(function() {

        $('#editor').summernote({

        height:300,

        });

        });
    </script>

@endsection
