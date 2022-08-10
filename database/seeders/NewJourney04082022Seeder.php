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

class NewJourney04082022Seeder extends Seeder
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
            'title' => "Vider son frigo avant les vacances",
            'order' => 1,
            'category' => "Énergie",
            'description' => "<p>Le r&eacute;frig&eacute;rateur et le cong&eacute;lateur sont les 2 appareils &eacute;lectro-m&eacute;nager <strong>consommant le plus</strong> et ce sont d'ailleurs les 2 seuls <strong>&agrave; tourner h24</strong>. Vider l'enti&egrave;ret&eacute; de son frigo avant de partir en vacances permet une <strong>&eacute;conomie d'&eacute;nergie</strong> cons&eacute;quente !</p>",
            'howto' => "<p>Pour vider son frigo avant de s'absenter plusieurs semaines, il suffit simplement de faire ses courses <strong>raisonnablement</strong> les semaines pr&eacute;c&eacute;dant les vacances et n'acheter que ce qui est n&eacute;cessaire, vider son frigo en consommant chaque jour ce qu'il y a dedans et congeler le reste. <strong>Si jamais vous avez des restes</strong>, pensez aux gestes sympa : donnez &agrave; vos proches, votre voisin, ou des personnes dans le besoin (l'application Geev permet de faire des dons alimentaires facilement). <strong>En bonus</strong>, tout consommer (y compris ce qu'il y a dans votre cong&eacute;lateur) permet &eacute;videmment de ne rien stocker dans ce dernier et de le d&eacute;brancher &eacute;galement ! Le double effet kiss cool ;-)</p>",
            'level' => "Débutant",
            'from' => "ADEME",
            'expawarded' => 30,
            'icon' => 'fa-solid fa-arrow-trend-down',
        ]);
        $challenge2 = Challenge::create([
            'challengeid' => (string) Str::uuid(),
            'title' => "Étendoir VS sèche-linge",
            'order' => 2,
            'category' => "Énergie",
            'description' => "<p>Faire s&eacute;cher son linge &agrave; l'air libre c'est de <strong>l'&eacute;nergie &eacute;conomis&eacute;e</strong> et des habits <strong>pr&eacute;serv&eacute;s</strong> qui durent ainsi plus longtemps; c'est &eacute;galement de belles &eacute;conomies financi&egrave;res ;)</p>",
            'howto' => "<p>Profitez de l'&Eacute;t&eacute; si vous &ecirc;tes en maison ou si vous avez un balcon (et au pire, un tancarville en appartemment devant une fen&ecirc;tre ensoleill&eacute;e fonctionne aussi bien !), sur une ann&eacute;e, un s&egrave;che-linge <strong>&eacute;quivaut &agrave; 5% de l'empreinte carbone due &agrave; notre consommation &eacute;nerg&eacute;tique</strong> ! Apr&egrave;s tout, c'est en moyenne 400kWh / personne / an (soit 18% de la consommation &eacute;lectrique annuelle moyenne en France). PS: bien souvent, le fil &agrave; linge/&eacute;tendoir peut s'utiliser toute l'ann&eacute;e, pas seulement en &eacute;t&eacute;, vous <strong>&eacute;conomisez</strong> donc toute l'ann&eacute;e !</p>",
            'level' => "Débutant",
            'from' => "ADEME",
            'expawarded' => 30,
            'icon' => 'fa-solid fa-wind',
        ]);
        $challenge3 = Challenge::create([
            'challengeid' => (string) Str::uuid(),
            'title' => "Il est givré ce congélo !",
            'order' => 3,
            'category' => "Énergie",
            'description' => "<p>Les &eacute;quipements de froid sont <strong>tr&egrave;s gourmands</strong> : plus de <strong>20% de la consommation d&rsquo;&eacute;lectricit&eacute; en moyenne d&rsquo;un m&eacute;nage</strong> (hors eau chaude). Bien les <strong>utiliser</strong> et bien les <strong>entretenir</strong> permet de ne pas les rendre encore plus &eacute;nergivores.</p>",
            'howto' => "<p>Le givre provient de la vapeur d&rsquo;eau. Limiter sa formation est important car <strong>un demi-centim&egrave;tre de givre augmente leur consommation de 30% et plus</strong>. Pour cela : couvrez les liquides et enveloppez les l&eacute;gumes plac&eacute;s dans le frigo. L&rsquo;&eacute;vaporation qu&rsquo;ils engendrent ajoute &agrave; la charge de travail du compresseur ; d&egrave;s que la couche de givre d&eacute;passe 2 &agrave; 3 mm, <strong>pensez &agrave; d&eacute;givrer</strong> ! Pour &eacute;viter la <strong>surconsommation</strong> d'&eacute;nergie dans votre frigo, des r&egrave;gles simples peuvent &ecirc;tre suivies : attendre que les aliments refroidissent avant de les mettre, bien le remplir, le laisser profiter du froid des aliments &agrave; d&eacute;congeler, l'entretenir, etc. Enfin, casser le cercle vicieux : s'il fait trop chaud chez vous, votre frigo + cong&egrave;l ne fonctionneront plus de mani&egrave;re <strong>optimale</strong>, ce qui occasionnera de grosses pertes d'&eacute;nergie.</p>",
            'level' => "Débutant",
            'from' => "ADEME",
            'expawarded' => 15,
            'from' => "SURFRIDER",
            'icon' => 'fa-solid fa-snowflake',
        ]);
        $challenge4 = Challenge::create([
            'challengeid' => (string) Str::uuid(),
            'title' => "Se passer de clim'",
            'order' => 4,
            'category' => "Énergie",
            'description' => "<p>Avec le <strong>changement climatique</strong>, les vagues de fortes chaleurs sont devenues plus <strong>fr&eacute;quentes</strong>, plus <strong>longues</strong> et <strong>intenses</strong>. Lorsque la temp&eacute;rature grimpe trop dans les logements, la sensation d'inconfort peut rapidement conduire &agrave; l'achat de climatiseurs. Or, ces appareils <strong>consomment beaucoup d&rsquo;&eacute;nergie</strong>, augmentent encore la facture d'&eacute;lectricit&eacute; et n&rsquo;apportent pas toujours le confort attendu. En plus de cela, les climatisations utilisent des fluides frigorig&egrave;nes, qui sont des gaz &agrave; haut pouvoir r&eacute;chauffant : <strong>c'est donc un cercle vicieux</strong> !</p>
            <p>En 2020, la climatisation a &eacute;t&eacute; responsable de <strong>pr&egrave;s de 5% des &eacute;missions de gaz &agrave; effet de serre produites par le secteur du b&acirc;timent</strong>. Environ 25% des m&eacute;nages sont d&eacute;j&agrave; &eacute;quip&eacute;s d'un climatiseur.</p>",
            'howto' => "<p><strong>Pour se passer de climatisateur</strong>, on peut : prot&eacute;ger ses fen&ecirc;tres (volets, brise-lumi&egrave;res...), miser sur les v&eacute;g&eacute;taux pour ombrager les murs, les terrasses, les balcons... Mais il faut aussi ouvrir et fermer les fen&ecirc;tres au bon moment de la journ&eacute;e (ouvrir quand le soleil est couch&eacute; donc), et &eacute;viter d'utiliser trop d'appareils &eacute;lectroniques, ou de laisser longtemps les lampes allum&eacute;es, qui peuvent r&eacute;chauffer les pi&egrave;ces.</p>
            <p>On peut miser aussi sur un <strong>ventilateur</strong> qui brassera l'air, plut&ocirc;t que de le refroidir. Pour chasser l'air chaud de l'int&eacute;rieur, on peut placer le ventilateur devant une fen&ecirc;tre ouverte, dos au dehors, en mettant devant lui des bouteilles d'eau froides ou gel&eacute;es. Enfin, pour <strong>rafra&icirc;chir</strong> l'int&eacute;rieur d'une pi&egrave;ce, on peut pendre des serviettes ou linges mouill&eacute;s : l'eau s'&eacute;vapore en prenant de la chaleur &agrave; l'air, ce qui <strong>refroidit</strong> la pi&egrave;ce en s&egrave;chant la serviette.</p>
            <p>ATTENTION cependant, <strong>la sant&eacute; prime</strong> : si votre &eacute;tat de sant&eacute; vous permet de vous passer de clim, c'est mieux de le faire, mais n'allez pas vous mettre en danger par temps caniculaire pour &eacute;viter quelques heures de clim. Parfois, elle peut &ecirc;tre <strong>n&eacute;cessaire</strong>, lorsqu'elle sert la sant&eacute; (et non le confort seul).</p>",
            'level' => "Intermédiaire",
            'from' => "ADEME",
            'expawarded' => 50,
            'icon' => 'fa-solid fa-temperature-empty',
        ]);

        $journey1 = Journey::create([
            'journeyid'=> (string) Str::uuid(),
            'title' => "Économe en énergie (Été)",
            'order' => 6,
            'description' => "<p>Le parcours <em><strong>&eacute;conome en énergie (&eacute;t&eacute;)</strong></em> permet de <strong>r&eacute;duire sa consommation &eacute;nerg&eacute;tique</strong> (et donc ses &eacute;missions de CO2) au sein de son logement avec <strong>l'arriv&eacute;e de la chaleur</strong> !</p>",
            'level' => "Débutant",
            'icon' => 'fa-solid fa-fire-flame-curved',
        ]);

        // Parcours 6 : Économe en énergie (Été)
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
        ]);
         // GES par défi
         Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge1->challengeid,
            'key' => 'kgeqCO2',
            'value' => '0.8'
        ]);
        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge2->challengeid,
            'key' => 'kgeqCO2',
            'value' => '24'
        ]);
        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge3->challengeid,
            'key' => 'kgeqCO2',
            'value' => '6'
        ]);
        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge4->challengeid,
            'key' => 'kgeqCO2',
            'value' => '115.8'
        ]);

        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge1->challengeid,
            'key' => 'source',
            'value' => 'https://librairie.ademe.fr/cadic/1973/guide-pratique-reduire-facture-electricite.pdf'
        ]);
        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge2->challengeid,
            'key' => 'source',
            'value' => 'https://nosgestesclimat.fr/documentation/logement/s%C3%A9chage-air-libre'
        ]);
        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge3->challengeid,
            'key' => 'source',
            'value' => 'https://nouvelle-caledonie.ademe.fr/sites/default/files/fiche-conseil-refrigerateur-congelateur.pdf'
        ]);
        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge4->challengeid,
            'key' => 'source',
            'value' => 'https://librairie.ademe.fr/cadic/7111/guide-garder-logement-frais-ete.pdf'
        ]);
        $badgeecoenergiesummer = Badge::create([
            'badgeid' => (string) Str::uuid(),
            'name' => 'Complètement givré !',
            'description' => 'Finir le parcours "Économe en énergie (Été)"',
            'imagename' => 'fa-solid fa-fire-flame-curved'
        ]);
        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge4->challengeid,
            'key' => 'badge',
            'value' => $badgeecoenergiesummer->badgeid
        ]);
    }
}
