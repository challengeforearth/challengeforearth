<section class="container-fluid">
    <div class="col-md-12">
        <div class="block block-rounded text-center">
            <div class="block-content block-content-full">
                <div class="no-gutters mb-5 pt-2 stat-values">
                    <p class="text-uppercase normal-font mb-2">
                        @lang('gamification::dashboard.general.challenge.title')
                    </p>
                    <p class="text-success nb-challenges-finished">{{$nbChallengesFinished}}</p>
                </div>

                <div class="row no-gutters d-flex justify-content-center">
                    <h3 class="text-uppercase normal-font mb-2">
                        @lang('gamification::dashboard.general.challenge.succeeded')
                    </h3>
                </div>
                <div class="no-gutters">
                    <div class="col-12 col-md-3 col-xl-2 text-center mb-2 d-flex stat-values">
                        <div class="icon-left">
                            <i class="ri-3x ri-cloud-line"></i>
                        </div>
                        <div class="stats-right">
                            <p class="nb-saved">0 KG</p>
                            <p class="unit-saved">DE CO2</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-xl-2 text-center mb-2 d-flex stat-values">
                        <div class="icon-left">
                            <i class="ri-3x ri-drop-line"></i>
                        </div>
                        <div class="stats-right">
                            <p class="nb-saved">0 L</p>
                            <p class="unit-saved">D'EAU</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-xl-2 text-center mb-2 d-flex stat-values">
                        <div class="icon-left">
                            <i class="ri-3x ri-money-euro-circle-line"></i>
                        </div>
                        <div class="stats-right">
                            <p class="nb-saved">0 €</p>
                            <p class="unit-saved">D'ECO</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
