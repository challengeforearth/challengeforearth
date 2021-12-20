@extends('layouts.signedin')

@section('content')

    <div class="welcome-area" id="welcome">
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                        <h1>{{ $journey->title }}</h1>
                        <p>{!! $journey->description !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section home-feature journey">
        <div class="container">
            <div class="challenges-flex">
                    @foreach ($challenges as $challenge)
                    <div class="features-small-item position-relative" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                        <a href="/challenge/show/{{$challenge->challengeid}}">
                            <div class="icon">
                                <i class="icons-challenge {{ $challenge->icon }}"></i>
                            </div>
                            <h5 class="features-title">{{ $challenge->title }}</h5>
                            <p class="green mb-4">-{{ $challenge->level }}-</p>
                        </a>
                        {!! $challenge->description !!}
                        @isset($challenge->from)
                            <div class="ribbon ribbon-top-right"><span>{{ $challenge->from }}</span></div>
                        @endisset
                    </div>
                    @endforeach
            </div>
        </div>
    </section>
@endsection
