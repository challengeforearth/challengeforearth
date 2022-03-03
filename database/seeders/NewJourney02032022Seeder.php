<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NewJourney02032022Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $challenge1 = Challenge::create([
            'challengeid' => (string) Str::uuid(),
            'title' => "Affichage au quotidien",
            'order' => 1,
            'category' => "Déchets",
            'description' => "",
            'howto' => "",
            'level' => "Débutant",
            'expawarded' => 10,
            'icon' => 'fa-solid fa-gauge-simple',
        ]);
        $challenge2 = Challenge::create([
            'challengeid' => (string) Str::uuid(),
            'title' => "Les poubelles",
            'order' => 2,
            'category' => "Déchets",
            'description' => "",
            'howto' => "",
            'level' => "Débutant",
            'expawarded' => 10,
            'icon' => 'fa-solid fa-gauge-simple',
        ]);
        $challenge3 = Challenge::create([
            'challengeid' => (string) Str::uuid(),
            'title' => "Le sac cabas",
            'order' => 3,
            'category' => "Déchets",
            'description' => "",
            'howto' => "",
            'level' => "Débutant",
            'expawarded' => 15,
            'icon' => 'fa-solid fa-gauge-simple',
        ]);
        $challenge4 = Challenge::create([
            'challengeid' => (string) Str::uuid(),
            'title' => "Les éco-recharges",
            'order' => 4,
            'category' => "Déchets",
            'description' => "",
            'howto' => "",
            'level' => "Débutant",
            'expawarded' => 15,
            'icon' => 'fa-solid fa-gauge-simple',
        ]);
        $challenge5 = Challenge::create([
            'challengeid' => (string) Str::uuid(),
            'title' => "Le compost",
            'order' => 5,
            'category' => "Déchets",
            'description' => "",
            'howto' => "",
            'level' => "Débutant",
            'expawarded' => 30,
            'icon' => 'fa-solid fa-gauge-simple',
        ]);
        $challenge6 = Challenge::create([
            'challengeid' => (string) Str::uuid(),
            'title' => "Eco-l’eau",
            'order' => 6,
            'category' => "Déchets",
            'description' => "",
            'howto' => "",
            'level' => "Débutant",
            'expawarded' => 20,
            'icon' => 'fa-solid fa-gauge-simple',
        ]);

        $journey1 = Journey::create([
            'journeyid'=> (string) Str::uuid(),
            'title' => "Pro des déchets",
            'order' => 1,
            'description' => "",
            'level' => "Débutant",
            'icon' => 'fa-solid fa-trash',
        ]);

        // Parcours 4 : déchets
        JourneyChallenge::create([
            'journeychallengeid' => (string) Str::uuid(),
            'journeyid'=> $journey1->journeyid,
            'challengeid' => $challenge1->challengeid,
            'childchallenge' => $challenge2->challengeid,
        ]);
        JourneyChallenge::create([
            'journeychallengeid' => (string) Str::uuid(),
            'journeyid'=> $journey1->journeyid,
            'challengeid' => $challenge2->challengeid,
            'childchallenge' => $challenge3->challengeid,
        ]);
        JourneyChallenge::create([
            'journeychallengeid' => (string) Str::uuid(),
            'journeyid'=> $journey1->journeyid,
            'challengeid' => $challenge3->challengeid,
            'childchallenge' => $challenge4->challengeid,
        ]);
        JourneyChallenge::create([
            'journeychallengeid' => (string) Str::uuid(),
            'journeyid'=> $journey1->journeyid,
            'challengeid' => $challenge4->challengeid,
            'childchallenge' => $challenge5->challengeid,
        ]);
        JourneyChallenge::create([
            'journeychallengeid' => (string) Str::uuid(),
            'journeyid'=> $journey1->journeyid,
            'challengeid' => $challenge5->challengeid,
            'childchallenge' => $challenge6->challengeid,
        ]);
        JourneyChallenge::create([
            'journeychallengeid' => (string) Str::uuid(),
            'journeyid'=> $journey1->journeyid,
            'challengeid' => $challenge6->challengeid,
        ]);
         // GES par défi
         Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge1->challengeid,
            'key' => 'kgeqCO2',
            'value' => '0'
        ]);
        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge2->challengeid,
            'key' => 'kgeqCO2',
            'value' => '0'
        ]);
        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge3->challengeid,
            'key' => 'kgeqCO2',
            'value' => '0'
        ]);
        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge4->challengeid,
            'key' => 'kgeqCO2',
            'value' => '0'
        ]);
        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge5->challengeid,
            'key' => 'kgeqCO2',
            'value' => '0'
        ]);
        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge6->challengeid,
            'key' => 'kgeqCO2',
            'value' => '0'
        ]);
        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge1->challengeid,
            'key' => 'source',
            'value' => 'https://datagir.ademe.fr/apps/nos-gestes-climat/'
        ]);
        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge2->challengeid,
            'key' => 'source',
            'value' => 'https://datagir.ademe.fr/apps/nos-gestes-climat/'
        ]);
        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge3->challengeid,
            'key' => 'source',
            'value' => 'https://datagir.ademe.fr/apps/nos-gestes-climat/'
        ]);
        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge4->challengeid,
            'key' => 'source',
            'value' => 'https://datagir.ademe.fr/apps/nos-gestes-climat/'
        ]);
        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge5->challengeid,
            'key' => 'source',
            'value' => 'https://datagir.ademe.fr/apps/nos-gestes-climat/'
        ]);
        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge6->challengeid,
            'key' => 'source',
            'value' => 'https://datagir.ademe.fr/apps/nos-gestes-climat/'
        ]);
        $badgetrash = Badge::create([
            'badgeid' => (string) Str::uuid(),
            'name' => 'Poubelle vide',
            'description' => 'Finir le parcours "Pro des déchets"',
            'imagename' => 'badge_trash.png'
        ]);
        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge6->challengeid,
            'key' => 'badge',
            'value' => $badgetrash->badgeid
        ]);
    }
}
