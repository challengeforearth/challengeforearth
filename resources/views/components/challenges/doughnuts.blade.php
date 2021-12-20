<section class="container-fluid">
    <div class="col-md-12">
        <div class="block block-rounded text-center">
            <div class="block-content block-content-full">
                <div class="row no-gutters challenges-doughnuts justify-content-around">
                    @include('gamification::components.doughnut', ['value' => $challenges_easy, 'level' => 'newbie', 'label' => $label_newbie])
                    @include('gamification::components.doughnut', ['value' => $challenges_intermediate, 'level' => 'intermediate', 'label' => $label_intermediate])
                    @include('gamification::components.doughnut', ['value' => $challenges_hard, 'level' => 'expert', 'label' => $label_expert])
                </div>
            </div>
        </div>
    </div>
</section>
