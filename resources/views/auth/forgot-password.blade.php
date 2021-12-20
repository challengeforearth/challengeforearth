@extends('layouts.app')

@section('content')
<div id="page-container" class="side-trans-enabled">
    <main id="main-container">
        <div class="bg-image" style="background-image: url('{{ asset('images/bg-login.jpeg') }}');">
            <div class="row no-gutters justify-content-center bg-primary-dark-op">
                <div class="hero-static col-sm-8 col-md-6 col-xl-4 d-flex align-items-center p-2 px-sm-0">
                    <div class="block block-transparent block-rounded w-100 mb-0 overflow-hidden">
                        <div class="block-content block-content-full px-lg-5 px-xl-6 py-4 py-md-5 py-lg-6 bg-white">
                            <div class="mb-2 text-center">
                                <a class="link-fx font-w700 font-size-h1" href="/">
                                    <span class="text-dark">Challenge</span> <span class="text-primary">For&nbsp;Earth</span>
                                </a>
                                <p class="text-uppercase font-w700 font-size-sm text-muted">Récupération de mot de passe</p>
                            </div>
                            @foreach ($errors->all() as $error)
                                <p class="text-danger">{{ $error }}</p>
                            @endforeach
                            <form class="js-validation-signin" method="POST" action="{{ route('password.email') }}" novalidate="novalidate">
                                @csrf
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="@lang('login.placeholder.email')">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fas fa-envelope"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group d-sm-flex justify-content-sm-between align-items-sm-center text-center text-sm-left">
                                    <div class="custom-control custom-checkbox custom-control-primary">
                                        <input type="checkbox" class="custom-control-input" id="login-remember-me" name="login-remember-me" checked="">
                                        <label class="custom-control-label" for="login-remember-me">@lang('login.rememberme')</label>
                                    </div>
                                    <div class="font-w600 font-size-sm py-1">
                                        <a href="{{ route('login') }}">Se connecter</a>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-hero-primary">
                                        <i class="fas fa-lock-open mr-1"></i> RÉCUPÉRER MOT DE PASSE
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
