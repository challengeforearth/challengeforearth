    <div class="challenge-details">
        <img class="" src="../../images/Challenge/{{$challenge->imagename}}" alt="">
        <div class="challenge-text container-fluid">
            <div class="challenge-intro">
                <div class="boxintro">
                    <h4 class="challenge-title">{{$challenge->title}}</h4>
                    <p class="challenge-type">
                        <i class="ri-calendar-line"></i><span class="text-success">Quotidien</span>
                    </p>
                </div>
                <div class="xpcomponent ">
                    <p class="component1">Obtenez&nbsp;:</p>
                    <div class="circle-white">
                        <p class="experience">{{$challenge->expawarded}}</p>
                    </div>
                    <p class="experience">XP</p>
                </div>
            </div>


            <p class="challenge-category">
                <span class="text-success">{{$challenge->level}} - {{$challenge->category}}</span>
            </p>
            <div class="challenge-description">
                {!!$challenge->description!!}
            </div>
            <div class="challenge-help ">
                {!!$challenge->howto!!}
            </div>

            <div class="bigbox-boutton">
                <div class="container-boutton">
                    <div class="">
                        <button class="challenge-accepted">
                            <i class="ri-check-line"></i>
                        </button>
                    </div>
                    <p class="text-boutton">
                            Je relève le défi
                    </p>
                </div>
                <div class="container-boutton">
                    <div class="">
                        <button class="challenge-later">
                                <i class="ri-more-line"></i>
                        </button>
                    </div>
                    <p class="text-boutton ">
                        Je le ferai plus tard...
                    </p>
                </div>
            </div>
        </div>

        <div class="slider" id="slider">
            <table class="tableslider">
                <tr>
                    <td><i class="ri-cloud-line"></i></td>
                    <td>100g CO2/j</td>
                    <td>100 000g CO2/an</td>
                </tr>
                <tr>
                    <td><i class="ri-drop-line"></i></td>
                    <td>10l Eau/k</td>
                    <td>100 000 000l Eau/j</td>
                </tr>
            </table>
        </div>
    </div>

