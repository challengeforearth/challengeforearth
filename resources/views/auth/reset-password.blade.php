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
                                <p class="text-uppercase font-w700 font-size-sm text-muted">Changement de mot de passe</p>
                            </div>
                            @foreach ($errors->all() as $error)
                                <p class="text-danger">{{ $error }}</p>
                            @endforeach
                            <form class="js-validation-signin" method="POST" action="{{ route('password.update') }}" novalidate="novalidate">
                                @csrf

                                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="@lang('login.placeholder.password')">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-asterisk"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirmation mot de passe">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-asterisk"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="@lang('login.placeholder.email')" required />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fas fa-envelope"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-hero-primary">
                                        <i class="fas fa-lock-open mr-1"></i> CHANGER LE MOT DE PASSE
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

