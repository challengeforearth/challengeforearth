<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Profile;
use App\Models\Challenge;
use App\Models\Journey;
use App\Models\JourneyChallenge;
use App\Models\Metachallenge;
use App\Models\Badge;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $challenge1 = Challenge::create([
            'challengeid' => (string) Str::uuid(),
            'title' => "Simuler son empreinte carbone",
            'order' => 1,
            'category' => "Sensibilisation",
            'description' => "<p>Parce-que la premi&egrave;re chose &agrave; faire et de savoir o&ugrave; on en est, rien de tel que de simuler son empreinte carbone avec un simulateur,&nbsp;comme <a title='Simulateur Nos Gestes Climats' href='http://nosgestesclimat.fr/' target='_blank'>Nos Gestes Climats</a> cr&eacute;&eacute; par l'<a title='L' Agence de l'environnement et de la ma&icirc;trise de l'&eacute;nergie' href='https://www.ademe.fr/' target='_blank' rel='noopener'>ADEME</a> et l'<a title='Association Bilan Carbone' href='https://www.associationbilancarbone.fr/' target='_blank'>Association Bilan Carbone</a>.</p>",
            'howto' => "<p>Pour ce faire, rien de plus simple : Rendez-vous sur <a title='Simulateur Nos Gestes Climats' href='http://nosgestesclimat.fr/' target='_blank' rel='noopener'>Nos Gestes Climats</a>, faire la simulation en vous laissant guider par l'application web... C'est rapide, &ccedil;a dure environ 10 minutes et c'est un premier levier pour prendre conscience de son impact sur l'environnement ! En bonus, vous aurez acc&egrave;s &agrave; plusieurs actions pour r&eacute;duire votre empreinte.</p>",
            'level' => "Débutant",
            'expawarded' => 20,
            'icon' => 'fa-solid fa-gauge-simple',
        ]);

        $challenge2 = Challenge::create([
            'challengeid' => (string) Str::uuid(),
            'title' => "Aller à la source",
            'order' => 2,
            'category' => "Sensibilisation",
            'description' => "<p>Ce d&eacute;fi est important puisqu'il sera la pierre angulaire de vos connaissances. Les sources d'information que vous suivez aiguilleront inexorablement votre pens&eacute;e, c'est pourquoi avoir des sources s&ucirc;res sur le sujet semble important.</p>",
            'howto' => "\"<p>Pour ce faire, voici une liste non-exhaustive de sources estim&eacute;es <span style=\"\"text-decoration: underline;\"\"><strong>s&ucirc;res</strong></span> :</p>
            <ul>
            <li><a title=\"\"L'Agence de l'environnement et de la ma&icirc;trise de l'&eacute;nergie\"\" href=\"\"https://www.ademe.fr/\"\" target=\"\"_blank\"\">L'Agence de l'environnement et de la ma&icirc;trise de l'&eacute;nergie (ADEME)</a></li>
            <li><a title=\"\"Bon Pote\"\" href=\"\"https://bonpote.com/\"\" target=\"\"_blank\"\">Bon Pote</a> de <a title=\"\"Thomas Wagner LinkedIn\"\" href=\"\"https://www.linkedin.com/in/thomas-wagner-0807b932/\"\" target=\"\"_blank\"\">Thomas Wagner (Page LinkedIn)</a> qui traite d'&eacute;cologie, d'&eacute;conomie, de justice sociale...</li>
            <li><a title=\"\"Site Web de Jean-Marc Jancovici\"\" href=\"\"https://jancovici.com/\"\" target=\"\"_blank\"\">Jancovici</a> de <a title=\"\"Jean-marc Jancovici LinkedIn\"\" href=\"\"https://www.linkedin.com/in/jean-marc-jancovici/\"\" target=\"\"_blank\"\">Jean-Marc Jancovici (Page LinkedIn)</a> qui traite d'&eacute;nergie et de climat</li>
            <li><a title=\"\"Pour un r&eacute;veil &eacute;cologique\"\" href=\"\"https://pour-un-reveil-ecologique.org/fr/\"\" target=\"\"_blank\"\">Pour un r&eacute;veil &eacute;cologique</a>, le collectif d'&eacute;tudiants qui vulgarise divers sujets &eacute;cologiques</li>
            <li><a title=\"\"Cyril Dion Instagram\"\" href=\"\"https://www.instagram.com/cyril_dion/\"\" target=\"\"_blank\"\">Cyril Dion (Instagram)</a>, auteur, r&eacute;alisateur et <strong><em>green activist</em></strong></li>
            </ul>
            <p>Des sources, <a title=\"\"Les comptes Instagram &agrave; suivre sur l'environnement\"\" href=\"\"https://bonpote.com/les-comptes-instagram-a-suivre-sur-le-climat-et-lenvironnement/\"\" target=\"\"_blank\"\">il y en a des dizaines de viables</a>, mais avec cette petite liste, vous partez d&eacute;j&agrave; gagnants !</p>\"",
            'level' => "Débutant",
            'expawarded' => 10,
            'icon' => 'fa-solid fa-globe',
        ]);

        $challenge3 = Challenge::create([
            'challengeid' => (string) Str::uuid(),
            'title' => "La fresque",
            'order' => 3,
            'category' => "Sensibilisation",
            'description' => "<p>Participer &agrave; un atelier collaboratif pour comprendre en 3 heures les enjeux climatiques sans &ecirc;tre climatologue ? C'est possible avec <a title=\"La Fresque du Climat\" href=\"https://fresqueduclimat.org/\" target=\"_blank\">La Fresque du Climat</a> !</p>",
            'howto' => "\"<p>Pour ce faire, il suffit de se rendre <a title=\"\"Page d'inscription &agrave; un atelier &quot;Fresque du Climat&quot;\"\" href=\"\"https://fresqueduclimat.org/inscription-atelier/\"\" target=\"\"_blank\"\">sur la page d'inscription</a> et de suivre les indications. Et pour les entreprises ? <a title=\"\"Inscription entreprise &agrave; un atelier &quot;Fresque du Climat&quot;\"\" href=\"\"https://fresqueduclimat.org/entreprises/\"\" target=\"\"_blank\"\">C'est par ici que &ccedil;a se passe</a>. Une fois l'atelier r&eacute;alis&eacute;, les enjeux climatiques n'auront plus de secret pour vous !</p>
            <p>Des fresques, il y en a plein (num&eacute;rique, mobilit&eacute;, alimentation, oc&eacute;ane, biodiversit&eacute;...), libre &agrave; vous d'y participer, les fresques fonctionnent toutes sensiblement de la m&ecirc;me fa&ccedil;on.</p>\"",
            'level' => "Débutant",
            'expawarded' => 35,
            'icon' => 'fa-solid fa-cloud',
        ]);

        $challenge4 = Challenge::create([
            'challengeid' => (string) Str::uuid(),
            'title' => "Deux tonnes",
            'order' => 4,
            'category' => "Sensibilisation",
            'description' => "<p>Deux tonnes d'&eacute;quivalent CO2 par an et par personne, comment y arriver ? C'est &agrave; cette question qu'essaie de r&eacute;pondre l'atelier <a title=\"Site Web 2tonnes\" href=\"https://www.2tonnes.org/\" target=\"_blank\">2tonnes</a>. Et comme c'est un objectif primordial pour 2050, rien de tel qu'un atelier pour y r&eacute;fl&eacute;chir !</p>",
            'howto' => "<p>Pour participer, il faut se rendre sur <a title=\"Page d'inscription de l'atelier 2tonnes\" href=\"https://www.2tonnes.org/citoyens\" target=\"_blank\">leur page d'inscription</a> et s'inscrire. C'est un atelier qui vise surtout les particuliers, mais les professionnels sont aussi accept&eacute;s &agrave; raison d'un repr&eacute;sentant par entreprise.</p>",
            'level' => "Débutant",
            'expawarded' => 35,
            'icon' => 'fa-solid fa-scale-unbalanced',
        ]);

        $journey1 = Journey::create([
            'journeyid'=> (string) Str::uuid(),
            'title' => "Éveil des consciences",
            'order' => 1,
            'description' => "<p>Le parcours <em><strong>&Eacute;veil des consciences</strong></em>&nbsp;est un parcours primordial afin de r&eacute;aliser le chemin &agrave; parcourir pour arriver aux objectifs n&eacute;cessaires. Simuler son empreinte carbone, se documenter, participer &agrave; un atelier <strong>2tonnes</strong> ou encore &agrave; une <strong>Fresque du Climat</strong>, tels sont les d&eacute;fis qui vous attendent dans ce parcours de sensibilisation !</p>",
            'level' => "Débutant",
            'icon' => 'fa-solid fa-seedling',
        ]);

        $challenge5 = Challenge::create([
            'challengeid' => (string) Str::uuid(),
            'title' => "Essayer la cuisine végétarienne",
            'order' => 1,
            'category' => "Alimentation",
            'description' => "<p>La consommation de viande est responsable d'une grosse partie des &eacute;missions de gaz &agrave; effet de serre (notamment CO2 et M&eacute;thane) il est donc primordial -pour arriver aux 2tCO2eq/an/habitant d'en r&eacute;duire sa consommation. La premi&egrave;re &eacute;tape pour y arriver, est d&eacute;j&agrave; de s'essayer &agrave; un plat v&eacute;g&eacute;tarien !</p>",
            'howto' => "<p>Pourquoi ne pas commencer par cuisiner un plat simple que tout le monde connait : Des p&acirc;tes &agrave; la Carbonara ? Tout ce qu'il faut pour la sauce, c'est (pour 4 personnes) :</p>
            <ul>
            <li>4 carottes, 2 courgettes, 1 oignon, 1 poign&eacute;e de petits pois</li>
            <li>2 œufs, 80g de parmesan</li>
            <li>4 c. &agrave; s. d'huile d'olive</li>
            <li>du basilic, du poivre et du sel</li>
            </ul>
            <p><a title='Des p&acirc;tes &agrave; la Carbonara v&eacute;g&eacute;tarienne' href='https://www.750g.com/carbonara-vegetarienne-r202631.htm' target='_blank' rel='noopener'>La recette compl&egrave;te est ici</a>, bon app&eacute;tit ! Et pour les plus curieux d'entre vous, <a title='Blog La F&eacute;e St&eacute;phanie' href='https://lafeestephanie.com' target='_blank'>La F&eacute;e St&eacute;phanie</a> vous propose des centaines de recette v&eacute;g&eacute;tariennes et v&eacute;g&eacute;taliennes, un blog &agrave; avoir dans sa cuisine absolument.</p>
            <p>&nbsp;</p>",
            'level' => "Débutant",
            'expawarded' => 25,
            'icon' => 'fa-solid fa-spoon',
        ]);

        $challenge6 = Challenge::create([
            'challengeid' => (string) Str::uuid(),
            'title' => "Manger de la viande uniquement le midi",
            'order' => 2,
            'category' => "Alimentation",
            'description' => "<p>... Ou le soir. Il est tout &agrave; fait possible de r&eacute;duire significativement l'empreinte de son alimentation, sans devenir strictement v&eacute;g&eacute;tarien.</p>
            <p>Sur ce geste, on remplace la moiti&eacute; de vos repas avec viande par des repas v&eacute;g&eacute;tariens.</p>",
            'howto' => "<p>Quelques conseils pour y arriver :</p>
            <ul>
            <li>Inversez la tendance : Servez la viande comme accompagnement,</li>
            <li>Consommez moins de viande rouge : privil&eacute;giez le porc et le poulet,</li>
            <li>Mangez plus d'aliments complets : r&eacute;duire la viande peut donner l'impression d'avoir plus souvent faim, les aliments complets donneront une plus grande sensation de sati&eacute;t&eacute;,</li>
            <li>Programmez des 'journ&eacute;es sans viande' de temps en temps.</li>
            </ul>",
            'level' => "Intermédiaire",
            'expawarded' => 75,
            'from' => 'ABC / ADEME',
            'icon' => 'fa-solid fa-drumstick-bite',
        ]);

        $challenge7 = Challenge::create([
            'challengeid' => (string) Str::uuid(),
            'title' => "Une semaine végétarienne",
            'order' => 3,
            'category' => "Alimentation",
            'description' => "<p>Programmer une semaine v&eacute;g&eacute;tarienne permet de vous plonger dans le quotidien de personnes ne mangeant pas de chair animale (viande, poisson, crustac&eacute;...)</p>",
            'howto' => "<p>Pour ce faire, vous pouvez reprendre certains conseils du d&eacute;fi 'Manger de la viande uniquement le midi', mais vous pouvez &eacute;galement pr&eacute;voir vos repas &agrave; l'avance en faisant un menu, afin de vous y tenir. Vous aurez plus de courage si vous savez d&eacute;j&agrave; ce que vous allez cuisiner le soir apr&egrave;s une longue journ&eacute;e. Vous pouvez &eacute;galement cuisiner les repas la veille ou l'avant-veille : la cuisine v&eacute;g&eacute;tale se garde tr&egrave;s bien au frigo !</p>",
            'level' => "Intermédiaire",
            'expawarded' => 80,
            'from' => 'ABC / ADEME',
            'icon' => 'fa-solid fa-calendar-week',
        ]);

        $challenge8 = Challenge::create([
            'challengeid' => (string) Str::uuid(),
            'title' => "Devenir végétarien",
            'order' => 4,
            'category' => "Alimentation",
            'description' => "<p>Adopter un r&eacute;gime v&eacute;g&eacute;tarien, donc sans viande ni poisson (mais avec des oeufs, du lait, du fromage, des yaourts).</p>
            <p>Moins fort que le r&eacute;gime v&eacute;g&eacute;talien, il permet d&eacute;j&agrave; une r&eacute;duction tr&egrave;s importante de l'empreinte sur le climat.</p>",
            'howto' => "<p>Si vous avez r&eacute;alis&eacute;s les d&eacute;fis pr&eacute;c&eacute;dents sur ce parcours, vous avez toutes les cl&eacute;s en main pour y arriver !</p>",
            'level' => "Intermédiaire",
            'expawarded' => 100,
            'from' => 'ABC / ADEME',
            'icon' => 'fa-solid fa-carrot',
        ]);

        $journey2 = Journey::create([
            'journeyid'=> (string) Str::uuid(),
            'title' => "Devenir végétarien",
            'order' => 2,
            'description' => "<p>Le parcours <em><strong>Devenir v&eacute;g&eacute;tarien</strong></em> est un parcours ayant un fort impact puisque l'alimentation est une des plus <strong>grosses</strong> sources d'&eacute;mission de gaz &agrave; effet de serre. &Eacute;tape par &eacute;tape, ce parcours vous guidera vers une <strong>r&eacute;duction</strong> de la consommation de viande (notamment rouge) afin de <strong>r&eacute;duire</strong> l'empreinte carbone de votre assiette.</p>",
            'level' => "Débutant",
            'icon' => 'fa-solid fa-carrot',
        ]);


        $challenge9 = Challenge::create([
            'challengeid' => (string) Str::uuid(),
            'title' => "Réduire mon temps de streaming",
            'order' => 1,
            'category' => "Numérique",
            'description' => "<p>Le streaming vid&eacute;o contribue aux &eacute;missions de GES (d'autant plus quand on utilise la connexion mobile) car il n&eacute;cessite en r&eacute;alit&eacute; une multitude d'infrastructures.</p>",
            'howto' => "<p>En limitant sa consommation, ici d'une heure&nbsp; par jour quand on y passe plus de 2h, et privil&eacute;gier des alternatives comme la lecture permet de r&eacute;duire son empreinte carbone num&eacute;rique.</p>",
            'level' => "Débutant",
            'expawarded' => 20,
            'from' => 'ABC / ADEME',
            'icon' => 'fa-brands fa-youtube',
        ]);

        $challenge10 = Challenge::create([
            'challengeid' => (string) Str::uuid(),
            'title' => "De bonnes résolutions",
            'order' => 2,
            'category' => "Numérique",
            'description' => "<p>La haute d&eacute;finition (HD) est tr&egrave;s &eacute;nergivore. Il est donc primordial lorsque c'est possible de r&eacute;duire la d&eacute;finition des vid&eacute;os que vous regardez en streaming.</p>",
            'howto' => "<p>Lorsque vous &eacute;coutez de la musique sur YouTube, il n'est pas forc&eacute;ment n&eacute;cessaire de laisser la vid&eacute;o tourner en 1080p, un simple 144p fait l'affaire puisque cela ne change pas la qualit&eacute; audio ! En bas &agrave; droite du lecteur vid&eacute;o de youTube, il y a une petite roue crant&eacute;e : c'est par ici que vous trouverez l'option pour r&eacute;duire la qualit&eacute; de la vid&eacute;o</p>
            <p>Il faut &eacute;galement savoir que bon nombre d'&eacute;crans ne savent pas encore g&eacute;rer correctement la 4K, notamment les smartphones et tablettes : Inutile donc de streamer votre film pr&eacute;f&eacute;r&eacute; dans une r&eacute;solution aussi haute !</p>",
            'level' => "Débutant",
            'expawarded' => 20,
            'icon' => 'fa-solid fa-desktop',
        ]);

        $challenge11 = Challenge::create([
            'challengeid' => (string) Str::uuid(),
            'title' => "La musique oui, mais en audio seulement",
            'order' => 3,
            'category' => "Numérique",
            'description' => "<p>Puisqu'on parle de musique dans le d&eacute;fi pr&eacute;c&eacute;dent, le streaming audio -bien que tout de m&ecirc;me polluant- l'est bien moins que son voisin le streaming vid&eacute;o. Vous pouvez donc quitter YouTube pour &eacute;couter vos musiques pr&eacute;f&eacute;r&eacute;es ! (quand elles sont disponibles sur d'autres plateformes &eacute;videmment)</p>",
            'howto' => "<p>Vous pouvez t&eacute;l&eacute;charger l'application <a title='Site Web Spotify' href='https://spotify.com/' target='_blank'>Spotify</a> ou <a title='Site Web Deezer' href='https://deezer.com' target='_blank'>Deezer</a> pour ne citer qu'eux ! Ils proposent un abonnement vraiment pas cher pour &eacute;viter les pubs toutes les 3 chansons.</p>",
            'level' => "Débutant",
            'expawarded' => 20,
            'icon' => 'fa-solid fa-music',
        ]);

        $challenge12 = Challenge::create([
            'challengeid' => (string) Str::uuid(),
            'title' => "La musique en offline",
            'order' => 4,
            'category' => "Numérique",
            'description' => "<p>Le streaming vid&eacute;o pollue plus que le streaming audio. Mais savez-vous ce qui pollue encore moins que le streaming audio ? L'&eacute;coute 'offline' ! &Eacute;coutez vos musiques pr&eacute;f&eacute;r&eacute;es en offline (c'est &agrave; dire t&eacute;l&eacute;charg&eacute;e sur votre appareil favori) plut&ocirc;t qu'avec votre connexion 4G ou WiFi.</p>",
            'howto' => "<p>Comment faire ? Spotify par exemple permet de le faire tr&egrave;s facilement si vous avez un abonnement&nbsp; chez eux : &agrave; c&ocirc;t&eacute; de votre playlist, vous avez 3 petits points verticaux. En cliquant dessus, un menu d&eacute;roulant appara&icirc;t avec l'option 'T&eacute;l&eacute;charger' !</p>",
            'level' => "Débutant",
            'expawarded' => 15,
            'icon' => 'fa-solid fa-power-off',
        ]);

        $challenge13 = Challenge::create([
            'challengeid' => (string) Str::uuid(),
            'title' => "Le WiFi plutôt que la 4G",
            'order' => 5,
            'category' => "Numérique",
            'description' => "<p>La connexion LTE (commercialis&eacute;e sous le nom 4G) consomme &eacute;norm&eacute;ment plus d'&eacute;nergie que le WiFi.</p>",
            'howto' => "<p>Attendez d'&ecirc;tre dans un endroit o&ugrave; le WiFi est disponible pour regarder votre vid&eacute;o : un geste tr&egrave;s simple mais tr&egrave;s efficace.</p>",
            'level' => "Débutant",
            'expawarded' => 10,
            'icon' => 'fa-solid fa-wifi',
        ]);

        $challenge14 = Challenge::create([
            'challengeid' => (string) Str::uuid(),
            'title' => "La lecteur automatique",
            'order' => 6,
            'category' => "Numérique",
            'description' => "<p>Les r&eacute;seaux sociaux ont la f&acirc;cheuse tendance &agrave; activer automatiquement la lecture des vid&eacute;os sur nos fils d'actualit&eacute;s. Une solution simple mais efficace pour lutter contre le streaming inutile, est de d&eacute;sactiver cette fonctionnalit&eacute; !</p>",
            'howto' => "<p>Sur l'application <a title='Site Web Facebook' href='https://facebook.com' target='_blank'>Facebook</a> par exemple, cliquez sur '<strong>Param&egrave;tres</strong>', symbolis&eacute; par trois barres horizontales superpos&eacute;es. Faites d&eacute;filer la page vers le bas et appuyez sur Param&egrave;tres de l'application. Appuyez sur '<strong>Lecture automatique des vid&eacute;os</strong>' et choisissez '<strong>Ne jamais lire les vid&eacute;os automatiquement</strong>', et le tour est jou&eacute; !</p>",
            'level' => "Débutant",
            'expawarded' => 10,
            'icon' => 'fa-solid fa-video-slash',
        ]);

        $journey3 = Journey::create([
            'journeyid'=> (string) Str::uuid(),
            'title' => "Sobriété numérique",
            'order' => 3,
            'description' => "<p>Le parcours <em><strong>Sobri&eacute;t&eacute; num&eacute;rique</strong></em> propose des d&eacute;fis sur un secteur en <strong>croissance</strong> <strong>exponentielle</strong> (Crypto-monnaies, NFT, 5G, Ultra full HD...) : le num&eacute;rique. Ce secteur &eacute;met plus de gaz &agrave; effet de serre que l'aviation civile, et ce n'est pas rien. On estime qu'en 2025, <strong>ce nombre va doubler</strong>.</p>",
            'level' => "Débutant",
            'icon' => 'fa-solid fa-globe',
        ]);

        // Parcours 1 : éveil
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

        // Parcours 2 : Végétarien
        JourneyChallenge::create([
            'journeychallengeid' => (string) Str::uuid(),
            'journeyid'=> $journey2->journeyid,
            'challengeid' => $challenge5->challengeid,
            'childchallenge' => $challenge6->challengeid,
        ]);
        JourneyChallenge::create([
            'journeychallengeid' => (string) Str::uuid(),
            'journeyid'=> $journey2->journeyid,
            'challengeid' => $challenge6->challengeid,
            'childchallenge' => $challenge7->challengeid,
        ]);
        JourneyChallenge::create([
            'journeychallengeid' => (string) Str::uuid(),
            'journeyid'=> $journey2->journeyid,
            'challengeid' => $challenge7->challengeid,
            'childchallenge' => $challenge8->challengeid,
        ]);
        JourneyChallenge::create([
            'journeychallengeid' => (string) Str::uuid(),
            'journeyid'=> $journey2->journeyid,
            'challengeid' => $challenge8->challengeid,
        ]);

        // Parcours 3 : numérique
        JourneyChallenge::create([
            'journeychallengeid' => (string) Str::uuid(),
            'journeyid'=> $journey3->journeyid,
            'challengeid' => $challenge9->challengeid,
            'childchallenge' => $challenge10->challengeid,
        ]);
        JourneyChallenge::create([
            'journeychallengeid' => (string) Str::uuid(),
            'journeyid'=> $journey3->journeyid,
            'challengeid' => $challenge10->challengeid,
            'childchallenge' => $challenge11->challengeid,
        ]);
        JourneyChallenge::create([
            'journeychallengeid' => (string) Str::uuid(),
            'journeyid'=> $journey3->journeyid,
            'challengeid' => $challenge11->challengeid,
            'childchallenge' => $challenge12->challengeid,
        ]);
        JourneyChallenge::create([
            'journeychallengeid' => (string) Str::uuid(),
            'journeyid'=> $journey3->journeyid,
            'challengeid' => $challenge12->challengeid,
            'childchallenge' => $challenge13->challengeid,
        ]);
        JourneyChallenge::create([
            'journeychallengeid' => (string) Str::uuid(),
            'journeyid'=> $journey3->journeyid,
            'challengeid' => $challenge13->challengeid,
            'childchallenge' => $challenge14->challengeid,
        ]);
        JourneyChallenge::create([
            'journeychallengeid' => (string) Str::uuid(),
            'journeyid'=> $journey3->journeyid,
            'challengeid' => $challenge14->challengeid,
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
            'value' => '5.78'
        ]);

        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge6->challengeid,
            'key' => 'kgeqCO2',
            'value' => '690'
        ]);

        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge7->challengeid,
            'key' => 'kgeqCO2',
            'value' => '26.01'
        ]);
        
        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge8->challengeid,
            'key' => 'kgeqCO2',
            'value' => '1352.52'
        ]);

        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge9->challengeid,
            'key' => 'kgeqCO2',
            'value' => '3.94'
        ]);

        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge10->challengeid,
            'key' => 'kgeqCO2',
            'value' => '62'
        ]);

        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge11->challengeid,
            'key' => 'kgeqCO2',
            'value' => '0'
        ]);

        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge12->challengeid,
            'key' => 'kgeqCO2',
            'value' => '0'
        ]);

        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge13->challengeid,
            'key' => 'kgeqCO2',
            'value' => '0'
        ]);

        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge14->challengeid,
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
            'value' => 'https://bonpote.com/10-actions-simples-pour-devenir-ecolo/'
        ]);

        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge3->challengeid,
            'key' => 'source',
            'value' => 'https://fresqueduclimat.org/projet/'
        ]);

        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge4->challengeid,
            'key' => 'source',
            'value' => 'https://www.2tonnes.org/a-propos'
        ]);

        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge5->challengeid,
            'key' => 'source',
            'value' => 'https://nosgestesclimat.fr/actions/plus/alimentation/r%C3%A9duire-viande/par-deux'
        ]);

        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge6->challengeid,
            'key' => 'source',
            'value' => 'https://nosgestesclimat.fr/actions/plus/alimentation/r%C3%A9duire-viande/par-deux'
        ]);

        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge7->challengeid,
            'key' => 'source',
            'value' => 'https://nosgestesclimat.fr/actions/plus/alimentation/r%C3%A9duire-viande/par-deux'
        ]);

        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge8->challengeid,
            'key' => 'source',
            'value' => 'https://nosgestesclimat.fr/actions/plus/alimentation/r%C3%A9duire-viande/par-deux'
        ]);

        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge9->challengeid,
            'key' => 'source',
            'value' => 'https://librairie.ademe.fr/cadic/2351/guide-pratique-face-cachee-numerique.pdf?modal=false'
        ]);

        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge10->challengeid,
            'key' => 'source',
            'value' => 'https://librairie.ademe.fr/cadic/2351/guide-pratique-face-cachee-numerique.pdf?modal=false'
        ]);

        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge11->challengeid,
            'key' => 'source',
            'value' => 'https://librairie.ademe.fr/cadic/2351/guide-pratique-face-cachee-numerique.pdf?modal=false'
        ]);

        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge12->challengeid,
            'key' => 'source',
            'value' => 'https://librairie.ademe.fr/cadic/2351/guide-pratique-face-cachee-numerique.pdf?modal=false'
        ]);

        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge13->challengeid,
            'key' => 'source',
            'value' => 'https://librairie.ademe.fr/cadic/2351/guide-pratique-face-cachee-numerique.pdf?modal=false'
        ]);

        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge14->challengeid,
            'key' => 'source',
            'value' => 'https://librairie.ademe.fr/cadic/2351/guide-pratique-face-cachee-numerique.pdf?modal=false'
        ]);
        

        $badgevg = Badge::create([
            'badgeid' => (string) Str::uuid(),
            'name' => 'Veggie',
            'description' => 'Finir le parcours "Devenir végétarien"',
            'imagename' => 'badge_vg.png'
        ]);

        $badgeweb = Badge::create([
            'badgeid' => (string) Str::uuid(),
            'name' => 'As des internets',
            'description' => 'Finir le parcours "Sobriété numérique"',
            'imagename' => 'badge_internet.png'
        ]);

        $badgewakeup = Badge::create([
            'badgeid' => (string) Str::uuid(),
            'name' => 'Éveillé·e',
            'description' => 'Finir le parcours "Éveil des consciences"',
            'imagename' => 'badge_wakeup.png'
        ]);

        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge8->challengeid,
            'key' => 'badge',
            'value' => $badgevg->badgeid
        ]);

        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge14->challengeid,
            'key' => 'badge',
            'value' => $badgeweb->badgeid
        ]);

        Metachallenge::create([
            'metachallengeid' => (string) Str::uuid(),
            'challengeid' => $challenge4->challengeid,
            'key' => 'badge',
            'value' => $badgewakeup->badgeid
        ]);
    }
}
