<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Challenge;
use App\Models\Journey;
use App\Models\JourneyChallenge;
use App\Models\Metachallenge;
use App\Models\Badge;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

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
            'description' => "<p>Un premier d&eacute;fi consiste &agrave; afficher quelque part (mur de la cuisine, couloir&hellip;) une <strong>liste des d&eacute;chets recyclables</strong>, afin de les avoir toujours sous les yeux.</p>",
            'howto' => "<p><strong>Rapprochez-vous de votre commune</strong> pour en obtenir un. On en trouve aussi sur le web, comme cet exemplaire par intercom du pays Brionnais : <a href='http://www.ccrc-brionne.fr/wp-content/uploads/2011/04/Consigne-de-tri-Bac-jaune.jpg' target='_blank'>Consigne de tri</a></p>",
            'level' => "Débutant",
            'expawarded' => 10,
            'from' => 'ADEME',
            'icon' => 'fa-solid fa-signs-post',
        ]);
        $challenge2 = Challenge::create([
            'challengeid' => (string) Str::uuid(),
            'title' => "Les poubelles",
            'order' => 2,
            'category' => "Déchets",
            'description' => "<p><strong>Placer des petites poubelles pour chaque type</strong>, dans votre cuisine, est d&eacute;j&agrave; le d&eacute;but d&rsquo;un tri. D&eacute;chets m&eacute;nagers, d&eacute;chets recyclables, d&eacute;chets verts&hellip; Et pourquoi pas m&ecirc;me le verre !</p>",
            'howto' => "<p>Vous pouvez opter pour <strong>des petites barquettes r&eacute;utilisables</strong> (si possible, des anciens d&eacute;chets pourquoi pas!). Plus vous vous rendrez le tri facile, plus vous trierez :)</p>",
            'level' => "Débutant",
            'expawarded' => 10,
            'icon' => 'fa-solid fa-dumpster',
        ]);
        $challenge3 = Challenge::create([
            'challengeid' => (string) Str::uuid(),
            'title' => "Le sac cabas",
            'order' => 3,
            'category' => "Déchets",
            'description' => "<p>Parmi les d&eacute;chets les plus fr&eacute;quents dans l&rsquo;environnement, il y a <strong>le sac plastique</strong>. Ce dernier met 400 ans environ &agrave; se d&eacute;truire, alors que nous utilisons finalement un sac que <strong>quelques heures tout au plus</strong>.</p>",
            'howto' => "<p>Un moyen tr&egrave;s simple consiste &agrave; utiliser un sac <strong>r&eacute;utilsable</strong> (type sac cabas) ou bien de r&eacute;utiliser ce sac plastique si vous n&rsquo;avez pas eu la possibilit&eacute; de faire autrement que de l&rsquo;obtenir. Par exemple, l&rsquo;utiliser comme sac poubelle, pour faire les liti&egrave;res de votre chat, etc. <strong>R&eacute;utiliser</strong>, plut&ocirc;t que jeter, toujours. Si vous &ecirc;tes d&eacute;j&agrave; un&middot;e warrior du sac cabas/tote bag, la prochaine &eacute;tape est d'avoir ses propres sacs en coton pour les fruits, les l&eacute;gumes, le pain etc. <strong><em>(petit plus, ils se conservent bien mieux dans du tissu que dans du plastique)</em></strong></p>",
            'level' => "Débutant",
            'expawarded' => 15,
            'icon' => 'fa-solid fa-bag-shopping',
        ]);
        $challenge4 = Challenge::create([
            'challengeid' => (string) Str::uuid(),
            'title' => "Les éco-recharges",
            'order' => 4,
            'category' => "Déchets",
            'description' => "<p>Les bidons de plastiques <strong>remplissent nos placards</strong> (puis nos poubelles), que ce soit la lessive, le savon&hellip; Alors quoi de mieux que de pouvoir les remplacer par des &laquo; &eacute;co-recharges &raquo; ?</p>",
            'howto' => "<p>Une &eacute;co-recharge, c&rsquo;est simplement un flacon <strong>r&eacute;utilisable</strong> que vous pouvez reremplir lorsque vous retournez en magasin (dispos dans la plupart des magasins vrac). Certaines marques (https://900.care/) utilisent m&ecirc;me des pastilles &agrave; dissoudre.</p>",
            'level' => "Débutant",
            'expawarded' => 15,
            'icon' => 'fa-solid fa-arrow-rotate-right',
        ]);
        $challenge5 = Challenge::create([
            'challengeid' => (string) Str::uuid(),
            'title' => "Le compost",
            'order' => 5,
            'category' => "Déchets",
            'description' => "<p>Saviez-vous qu&rsquo;<strong>un tiers de nos d&eacute;chets sont d&rsquo;origine organique</strong> ? Alors pourquoi ne pas r&eacute;utiliser cela pour &eacute;conomiser de la place ? Si vous avez un jardin, un balcon, ou si vous cultivez des plantes en int&eacute;rieur, ce d&eacute;fi vous int&eacute;ressera !</p>",
            'howto' => "<p>Composter ses d&eacute;chets de cuisine et de jardin permet de produire un engrais de qualit&eacute; et permet aussi de r&eacute;duire la taille de sa poubelle ! Un compost est tr&egrave;s facile &agrave; faire, encore plus lorsque l'on a l'habitude. Vous pouvez mettre tous vos d&eacute;chets organiques et vos restes de repas, tant que ceux-ci ne contiennent pas de composants d'origine animale (cela attirerait des rats). Il faut &eacute;galement le retourner de temps en temps pour l'a&eacute;rer et &eacute;viter les &eacute;missions de m&eacute;thane. Vous verrez que non seulement vous r&eacute;duirez de beaucoup vos d&eacute;chets mais, aussi, votre poubelle ne sentira plus mauvais et sera bien plus propre. Pour plus de d&eacute;tails : <a href='https://ademe.typepad.fr/files/guide_ademe_compostage_domestique.pdf' target='_blank'>Guide du compostage domestique par l'ADEME</a></p>",
            'level' => "Débutant",
            'expawarded' => 30,
            'from' => 'ADEME',
            'icon' => 'fa-solid fa-apple-whole',
        ]);
        $challenge6 = Challenge::create([
            'challengeid' => (string) Str::uuid(),
            'title' => "Eco-l’eau",
            'order' => 6,
            'category' => "Déchets",
            'description' => "<p>L&rsquo;eau en bouteille est une <strong>aberration &eacute;cologique</strong> : c&rsquo;est l&rsquo;un des d&eacute;chets les plus fr&eacute;quents ! L'eau du robinet a un impact bien moindre que l'eau en bouteille.</p>",
            'howto' => "<p>Boire l&rsquo;eau du robinet est majoritairement <strong>possible</strong> en France, car la qualit&eacute; de l&rsquo;eau est <strong>excellente</strong> et son go&ucirc;t est <strong>suffisamment bon</strong> (quasiment partout) pour rivaliser avec celui de l&rsquo;eau en bouteille. Sachez par ailleurs que l&rsquo;eau du robinet est <strong>test&eacute;e</strong> &agrave; divers endroits du circuit, avec des capteurs, ce qui assure qu&rsquo;il n&rsquo;y a pas de produit nocif que vous finiriez par ingurgiter ! Si le go&ucirc;t de l'eau chez vous ne vous pla&icirc;t pas, vous pouvez toujours : utiliser une carafe filtrante ou utiliser des perles de c&eacute;ramique ou du charbon actif pour purifier votre eau. Pour enlever le go&ucirc;t du chlore, rien de mieux que de laisser sa carafe ouverte (sur la table ou au r&eacute;frig&eacute;rateur). Enfin, pour celleux qui trouvent l'eau fade, vous pouvez toujours l'agr&eacute;menter de jus de citron, sirops, infusions, etc.</p>",
            'level' => "Débutant",
            'expawarded' => 20,
            'from' => 'ADEME',
            'icon' => 'fa-solid fa-faucet',
        ]);

        $journey1 = Journey::create([
            'journeyid'=> (string) Str::uuid(),
            'title' => "Pro des déchets",
            'order' => 4,
            'description' => "<p>Le parcours <em><strong>Pro des d&eacute;chets</strong></em> propose des d&eacute;fis autour de la gestion des d&eacute;chets au quotidien. Tri, DIY&hellip; Le z&eacute;ro d&eacute;chet est probablement <strong>une des choses les plus difficiles</strong> en &eacute;co-gestes, mais <strong>une des plus faciles &agrave; d&eacute;buter</strong>, voici donc un parcours facile pour <strong>commencer</strong> &agrave; <strong>r&eacute;duire</strong> le nombre de d&eacute;chets &agrave; la maison !</p>",
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
            'value' => '23'
        ]);
        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge3->challengeid,
            'key' => 'kgeqCO2',
            'value' => '2.5'
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
            'value' => '2.7'
        ]);
        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge6->challengeid,
            'key' => 'kgeqCO2',
            'value' => '14.4'
        ]);
        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge1->challengeid,
            'key' => 'source',
            'value' => 'https://multimedia.ademe.fr/animations/alimentation/'
        ]);
        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge2->challengeid,
            'key' => 'source',
            'value' => 'https://www.triercestdonner.fr/guide-du-tri'
        ]);
        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge3->challengeid,
            'key' => 'source',
            'value' => 'https://www.terraeco.net/Le-sachet-combien-d-emissions-de,14973.html'
        ]);
        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge4->challengeid,
            'key' => 'source',
            'value' => 'https://www.zerowastefrance.org/supermarches-zero-waste-vrac/'
        ]);
        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge5->challengeid,
            'key' => 'source',
            'value' => 'https://bilans-ges.ademe.fr/documentation/UPLOAD_DOC_FR/index.htm?emissions_evitees.htm'
        ]);
        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge6->challengeid,
            'key' => 'source',
            'value' => 'https://www.optigede.ademe.fr/sites/default/files/fichiers/Outil_Geste_10_Eau_du_robinet.pdf'
        ]);
        $badgetrash = Badge::create([
            'badgeid' => (string) Str::uuid(),
            'name' => 'Débutant zéro déchet',
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
