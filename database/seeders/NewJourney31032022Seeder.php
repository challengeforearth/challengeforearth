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

class NewJourney31032022Seeder extends Seeder
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
            'title' => "Lessive naturelle",
            'order' => 1,
            'category' => "DIY",
            'description' => "<p>Les lessives polluent <em><strong>surtout</strong></em> &agrave; cause de certains de leurs r&eacute;sidus qui d&eacute;gradent la qualit&eacute; de l'eau et alt&egrave;rent les <strong>&eacute;cosyst&egrave;mes</strong> <strong>aquatiques</strong>. Chaque foyer europ&eacute;en utilise en moyenne <em><strong>40kg</strong></em> de lessive par an, selon l'<a title='ADEME' href='https://www.ademe.fr/' target='_blank'>ADEME</a>. Alors comment r&eacute;duire cette quantit&eacute; de bidons plastiques et de produits chimiques d&eacute;riv&eacute;s du p&eacute;trole ?</span></p>",
            'howto' => "<p>Recette : 100 feuilles de lierres, &agrave; d&eacute;chirer pour une <strong>meilleure</strong> <strong>efficacit&eacute;</strong>, dans un fait-tout avec 3 litres d&rsquo;eau. Faire <strong>bouillir</strong> un quart d&rsquo;heure avec un couvercle, laisser reposer 24h (couvercle toujours dessus), votre lessive est pr&ecirc;te. Vous pouvez utiliser un bidon usag&eacute; pour l&rsquo;y verser. <strong>Attention</strong>, un d&eacute;p&ocirc;t peut se former au fond du bidon au bout de quelques semaines. Votre linge ne sent pas l'odeur de propre auquel les produits chimiques vous ont habitu&eacute;.e ? Pas de panique, <em><strong>le propre n'a pas d'odeur</strong></em>, on s'y habitue tr&egrave;s vite :) </span></p>",
            'level' => "Débutant",
            'expawarded' => 20,
            'icon' => 'fas fa-leaf',
        ]);
        $challenge2 = Challenge::create([
            'challengeid' => (string) Str::uuid(),
            'title' => "Le vinaigre blanc et le bicarbonate",
            'order' => 2,
            'category' => "DIY",
            'description' => "<p>On ne le pr&eacute;sente plus : le vinaigre blanc est tr&egrave;s <strong>efficace</strong> pour nettoyer/d&eacute;sinfecter/r&eacute;curer. Mais savez-vous que l&rsquo;on peut le <strong>fusionner</strong> avec du bicarbonate de soude ?</span></p>",
            'howto' => "<p>Le <strong>m&eacute;lange</strong> vinaigre blanc + bicarbonate de soude permet de <strong>supprimer</strong> les t&acirc;ches les plus tenaces. Pour cela, <strong>saupoudrer</strong> de bicarbonate l&rsquo;endroit o&ugrave; il y a une t&acirc;che incrust&eacute;e, vaporisez du vinaigre blanc (en r&eacute;utilisant un ancien spray m&eacute;nager pourquoi pas), laissez <strong>agir</strong> quelques minutes (&ccedil;a va faire des bulles, c&rsquo;est normal!), votre t&acirc;che devrait s&rsquo;enlever bien plus facilement d&eacute;sormais.</span></p></p>",
            'level' => "Débutant",
            'from' => "ADEME",
            'expawarded' => 20,
            'icon' => 'fas fa-soap',
        ]);
        $challenge3 = Challenge::create([
            'challengeid' => (string) Str::uuid(),
            'title' => "Une éponge oui, mais zéro déchet !",
            'order' => 3,
            'category' => "DIY",
            'description' => "<p>En France, un individu au cours de sa vie ach&egrave;te plus de <strong>10 000</strong> <strong>&eacute;ponges</strong> afin d'accomplir les t&acirc;ches m&eacute;nag&egrave;res quotidienne. Mais on peut aussi fabriquer une &eacute;ponge 'z&eacute;ro d&eacute;chet' que l'on appelle '<strong>tawashi</strong>'.</span></p>",
            'howto' => "<p>Une tawashi est une &eacute;ponge <strong>lavable</strong>, fabriqu&eacute;e &agrave; partir de v&ecirc;tements <strong>us&eacute;s</strong> (le plus souvent, des collants), assembl&eacute;e d&rsquo;une certaine fa&ccedil;on afin de former une &eacute;ponge <strong>lavable</strong> ! Fini les &eacute;ponges qui s&rsquo;usent vite, que l&rsquo;on doit racheter r&eacute;guli&egrave;rement, avec leur emballage plastique ! Et vous pouvez <strong>laver</strong> votre tawashi avec votre linge en machine, pour &eacute;viter les habituels nids &agrave; bact&eacute;rie !</span></p>",
            'level' => "Intermédiaire",
            'expawarded' => 30,
            'from' => "SURFRIDER",
            'icon' => 'fa-solid fa-socks',
        ]);
        $challenge4 = Challenge::create([
            'challengeid' => (string) Str::uuid(),
            'title' => "Un dentifrice pas comme les autres",
            'order' => 4,
            'category' => "DIY",
            'description' => "<p>Outre le c&ocirc;t&eacute; tr&egrave;s <strong>chimique</strong> du dentifrice, combien de tubes usons-nous par an ? Dans une vie ? Et les <strong>conservateurs</strong>, les <strong>microbilles</strong> ? Voici une m&eacute;thode pour se d&eacute;barrasser une bonne fois pour toute de ces tubes.</span></p>",
            'howto' => "<p>La fabrication d&rsquo;un dentifrice varie beaucoup, d&rsquo;une personne &agrave; une autre. La texture, la couleur, le go&ucirc;t, l&rsquo;odeur qu&rsquo;il laisse dans la bouche sont tout un tas de choses &agrave; prendre en consid&eacute;ration : pr&eacute;f&eacute;rez-vous une sensation de fra&icirc;cheur ? Pr&eacute;f&eacute;rez la menthe. Voulez-vous un parfum plus acidul&eacute; ? Optez pour du citron. Voici une <a title='Recette dentifrice &eacute;colo' href='https://fr.oceancampus.eu/tutoriel/3fS/la-recette-du-dentifrice' target='_blank'>recette</a> efficace ! Pour les adeptes du encore plus simple et plus rapide, un dentifrice monoproduit : la poudre de racine de siwak. Dans certaines cultures, on se brossait les dents en frottant directement la racine (pas besoin de brosse &agrave; dent, et c'&eacute;tait z&eacute;ro d&eacute;chet :) )</span></p>",
            'level' => "Intermédiaire",
            'expawarded' => 30,
            'from' => "SURFRIDER",
            'icon' => 'fa-solid fa-tooth',
        ]);

        $journey1 = Journey::create([
            'journeyid'=> (string) Str::uuid(),
            'title' => "Fait maison",
            'order' => 5,
            'description' => "<p>Le parcours <em><strong>Fait maison</strong></em> permet de <strong>r&eacute;duire</strong> consid&eacute;rablement ses d&eacute;chets ainsi que les produits chimiques dans la nature et sur nous-m&ecirc;me : Lessive, produits m&eacute;nagers, dentifrice... On peut drastiquement r&eacute;duire son impact environnemental mais aussi faire des &eacute;conomies, en <strong>fabricant</strong> nous-m&ecirc;mes nos produits !</span></p>",
            'level' => "Débutant",
            'icon' => 'fa-solid fa-hammer',
        ]);

        // Parcours 5 : DIY
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
            'challengeid' => $challenge2->challengeid,
            'key' => 'source',
            'value' => 'https://www.optigede.ademe.fr/sites/default/files/fiches-actions-documents/LIVRET%20MENAGE%20DE%20PRINTEMPS_CMJN.pdf'
        ]);
        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge3->challengeid,
            'key' => 'source',
            'value' => 'https://fr.oceancampus.eu/tutoriel/ipr/tawashi'
        ]);
        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge4->challengeid,
            'key' => 'source',
            'value' => 'https://fr.oceancampus.eu/tutoriel/3fS/la-recette-du-dentifrice'
        ]);
        $badgediy = Badge::create([
            'badgeid' => (string) Str::uuid(),
            'name' => 'Do It Yourself ! (DIY)',
            'description' => 'Finir le parcours "Fait maison"',
            'imagename' => 'fa-solid fa-hammer'
        ]);
        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge4->challengeid,
            'key' => 'badge',
            'value' => $badgediy->badgeid
        ]);
    }
}
