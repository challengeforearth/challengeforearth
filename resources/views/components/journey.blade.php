<div class="journey-list">
    <a href="{{ route('journey.show', $journey->journeyid) }}" class="journey">
        <img class="img-fluid" src="../../images/Challenge/{{$journey->imagename}}" alt="">
        <p class="journey-tiletextt">
            {{$journey->title}}
        </p>
        <p class="journey-tiletextb">
            {{$journey->description}}
        </p>
    </a>
</div>
