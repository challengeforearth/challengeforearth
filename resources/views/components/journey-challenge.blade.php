<div class="journey-challenge-list journey-challenge">
    <img class="img-fluid" src="../../images/Challenge/{{$challenge->imagename}}" alt="">
    <h3 class="journey-challenge-title">{{$challenge->category}}</h3>
    <div class="bigboxjourney-challenge-intro">
        <p class="journey-challenge-intro">{{$challenge->title}}</p>
        <p class="journey-challenge-intro">{!!$challenge->shortdescription!!}</p>
    </div>
    <!-- utiliser une fonction pour short summary -->
    <div class="bigboxjourney-challenge-status">
        @if($challenge->status === 0 )
            <button class="btn-status btn-danger"> <i class="ri-lock-line"></i> Challenge Bloqué</button>
        @endif
        @if($challenge->status === 1 )
            <button class="btn-status btn-dark"> <i class="ri-lock-line"></i> Challenge en cours</button>
        @endif
        @if($challenge->status === 2 )
            <button class="btn-status btn-success"> <i class="ri-lock-line"></i> Challenge terminé </button>
        @endif
    </div>
</div>
