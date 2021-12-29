@extends('layouts.signedout')

@section('content')


    <main id="yield">
        <div class="welcome-area" id="welcome">
            <div class="header-text">
                <div class="container">
                    <div class="row">
                        <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                            <h1>Conditions générales</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="section padding-top-70 padding-bottom-0" id="features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 align-self-center">
                        <h2>Termes et conditions g&eacute;n&eacute;rales</h2>
                        <p class="description-black">Bienvenue sur Challenge For Earth !</p>
                        <p class="description-black">Les pr&eacute;sentes conditions g&eacute;n&eacute;rales d&eacute;crivent les r&egrave;gles et r&egrave;glements relatifs &agrave; l'utilisation du site web de Challenge For Earth, situ&eacute; &agrave; l'adresse https://challengeforearth.com.</p>
                        <p class="description-black">En acc&eacute;dant &agrave; ce site web, nous supposons que vous acceptez ces conditions g&eacute;n&eacute;rales. Ne continuez pas &agrave; utiliser Challenge For Earth si vous n'acceptez pas de prendre toutes les conditions g&eacute;n&eacute;rales &eacute;nonc&eacute;es sur cette page.</p>
                        <h2>Cookies :</h2>
                        <p class="description-black">Le site web utilise des cookies pour aider &agrave; personnaliser votre exp&eacute;rience en ligne. En acc&eacute;dant &agrave; Challenge For Earth, vous avez accept&eacute; d'utiliser les cookies requis.</p>
                        <p class="description-black">Un cookie est un fichier texte qui est plac&eacute; sur votre disque dur par un serveur de pages web. Les cookies ne peuvent pas &ecirc;tre utilis&eacute;s pour ex&eacute;cuter des programmes ou transmettre des virus &agrave; votre ordinateur. Les cookies vous sont attribu&eacute;s de mani&egrave;re unique et ne peuvent &ecirc;tre lus que par un serveur web du domaine qui vous a &eacute;mis le cookie.</p>
                        <p class="description-black">Nous pouvons utiliser des cookies pour collecter, stocker et suivre des informations &agrave; des fins statistiques ou marketing pour exploiter notre site web. Vous avez la possibilit&eacute; d'accepter ou de refuser les Cookies facultatifs. Il existe certains Cookies obligatoires qui sont n&eacute;cessaires au fonctionnement de notre site web. Ces cookies ne n&eacute;cessitent pas votre consentement car ils fonctionnent toujours. N'oubliez pas qu'en acceptant les Cookies obligatoires, vous acceptez &eacute;galement les Cookies tiers, qui pourraient &ecirc;tre utilis&eacute;s via des services fournis par des tiers si vous utilisez ces services sur notre site web, par exemple, une fen&ecirc;tre d'affichage vid&eacute;o fournie par des tiers et int&eacute;gr&eacute;e &agrave; notre site web.</p>
                        <h2>Licence :</h2>
                        <p class="description-black">Sauf indication contraire, Challenge For Earth et/ou ses conc&eacute;dants de licence d&eacute;tiennent les droits de propri&eacute;t&eacute; intellectuelle de l'ensemble du mat&eacute;riel pr&eacute;sent sur Challenge For Earth. Tous les droits de propri&eacute;t&eacute; intellectuelle sont r&eacute;serv&eacute;s. Vous pouvez y acc&eacute;der &agrave; partir de Challenge For Earth pour votre usage personnel, sous r&eacute;serve des restrictions fix&eacute;es dans les pr&eacute;sentes conditions g&eacute;n&eacute;rales.</p>
                        <p class="description-black">Vous ne devez pas :</p>
                        <ul>
                        <li>Copier ou republier des &eacute;l&eacute;ments provenant de Challenge For Earth.</li>
                        <li>Vendre, louer ou conc&eacute;der une sous-licence pour le mat&eacute;riel provenant de Challenge For Earth.</li>
                        <li>Reproduire, dupliquer ou copier le mat&eacute;riel provenant de Challenge For Earth.</li>
                        <li>Redistribuer le contenu de Challenge For Earth</li>
                        </ul>
                        <p class="description-black">Le pr&eacute;sent accord prend effet &agrave; la date des pr&eacute;sentes.</p>
                        <p class="description-black">Certaines parties de ce site web offrent aux utilisateurs la possibilit&eacute; de publier et d'&eacute;changer des opinions et des informations dans certaines zones du site web. Challenge For Earth ne filtre pas, n'&eacute;dite pas, ne publie pas et ne r&eacute;vise pas les commentaires avant leur pr&eacute;sence sur le site web. Les commentaires ne refl&egrave;tent pas les vues et opinions de Challenge For Earth, de ses agents et/ou de ses affili&eacute;s. Les commentaires refl&egrave;tent les vues et opinions de la personne qui les publie. Dans la mesure o&ugrave; les lois applicables le permettent, Challenge For Earth ne peut &ecirc;tre tenu responsable des commentaires ou de toute responsabilit&eacute;, de tout dommage ou de toute d&eacute;pense caus&eacute;s et/ou subis &agrave; la suite de l'utilisation et/ou de l'affichage et/ou de l'apparition des commentaires sur ce site web.</p>
                        <p class="description-black">Challenge For Earth se r&eacute;serve le droit de surveiller tous les commentaires et de supprimer tout commentaire qui peut &ecirc;tre consid&eacute;r&eacute; comme inappropri&eacute;, offensant, ou qui entra&icirc;ne une violation des pr&eacute;sentes conditions g&eacute;n&eacute;rales.</p>
                        <p class="description-black">Vous garantissez et d&eacute;clarez que :</p>
                        <ul>
                        <li>Vous avez le droit de publier les commentaires sur notre site web et disposez de toutes les licences et de tous les consentements n&eacute;cessaires pour le faire ;</li>
                        <li>Les commentaires n'envahissent aucun droit de propri&eacute;t&eacute; intellectuelle, y compris, sans limitation, le droit d'auteur, le brevet ou la marque de commerce d'un tiers ;</li>
                        <li>Les Commentaires ne contiennent aucun &eacute;l&eacute;ment diffamatoire, calomnieux, offensant, ind&eacute;cent ou autrement ill&eacute;gal, constituant une atteinte &agrave; la vie priv&eacute;e.</li>
                        <li>Les Commentaires ne seront pas utilis&eacute;s pour solliciter ou promouvoir des affaires ou des coutumes ou pr&eacute;senter des activit&eacute;s commerciales ou des activit&eacute;s ill&eacute;gales.</li>
                        </ul>
                        <p class="description-black">Par la pr&eacute;sente, vous accordez &agrave; Challenge For Earth une licence non exclusive pour utiliser, reproduire, &eacute;diter et autoriser d'autres personnes &agrave; utiliser, reproduire et &eacute;diter n'importe lequel de vos commentaires sous toutes les formes, formats ou m&eacute;dias.</p>
                        <h2>L'&eacute;tablissement d'hyperliens vers notre contenu :</h2>
                        <p class="description-black">Les organisations suivantes peuvent cr&eacute;er des liens vers notre site web sans autorisation &eacute;crite pr&eacute;alable :</p>
                        <ul>
                        <li>Les agences gouvernementales ;</li>
                        <li>Moteurs de recherche ;</li>
                        <li>Organismes de presse ;</li>
                        <li>Les distributeurs d'annuaires en ligne peuvent cr&eacute;er des liens vers notre site web de la m&ecirc;me mani&egrave;re qu'ils cr&eacute;ent des hyperliens vers les sites web d'autres entreprises r&eacute;pertori&eacute;es ; et...</li>
                        <li>Les entreprises accr&eacute;dit&eacute;es &agrave; l'&eacute;chelle du syst&egrave;me, &agrave; l'exception des organismes &agrave; but non lucratif de sollicitation, des centres commerciaux de bienfaisance et des groupes de collecte de fonds de bienfaisance qui ne peuvent pas &eacute;tablir d'hyperlien vers notre site Web.</li>
                        </ul>
                        <p class="description-black">Ces organisations peuvent cr&eacute;er des liens vers notre page d'accueil, vers des publications ou vers d'autres informations du site web, tant que le lien : (a) n'est en aucun cas trompeur ; (b) n'implique pas faussement le parrainage, l'approbation ou le soutien de la partie liante et de ses produits et/ou services ; et (c) s'inscrit dans le contexte du site de la partie liante.</p>
                        <p class="description-black">Nous pouvons prendre en consid&eacute;ration et approuver d'autres demandes de liens provenant des types d'organisations suivantes :</p>
                        <ul>
                        <li>les sources d'information commun&eacute;ment connues des consommateurs et/ou des entreprises ;</li>
                        <li>les sites communautaires point.com ;</li>
                        <li>les associations ou autres groupes repr&eacute;sentant des organismes de bienfaisance ;</li>
                        <li>les distributeurs d'annuaires en ligne ;</li>
                        <li>les portails internet ;</li>
                        <li>les cabinets de comptabilit&eacute;, d'avocats et de consultants ; et</li>
                        <li>les &eacute;tablissements d'enseignement et les associations professionnelles.</li>
                        </ul>
                        <p class="description-black">Nous approuverons les demandes de liens de ces organisations si nous d&eacute;cidons que : (a) le lien ne nous donnerait pas une image d&eacute;favorable de nous-m&ecirc;mes ou de nos entreprises accr&eacute;dit&eacute;es ; (b) l'organisation n'a pas de dossier n&eacute;gatif avec nous ; (c) l'avantage que nous retirons de la visibilit&eacute; de l'hyperlien compense l'absence de Challenge For Earth ; et (d) le lien s'inscrit dans le contexte d'informations g&eacute;n&eacute;rales sur les ressources.</p>
                        <p class="description-black">Ces organisations peuvent &eacute;tablir un lien vers notre page d'accueil tant que le lien : (a) n'est en aucun cas trompeur ; (b) n'implique pas faussement le parrainage, l'approbation ou l'aval de la partie liante et de ses produits ou services ; et (c) s'inscrit dans le contexte du site de la partie liante.</p>
                        <p class="description-black">Si vous &ecirc;tes l'une des organisations &eacute;num&eacute;r&eacute;es au paragraphe 2 ci-dessus et que vous souhaitez cr&eacute;er un lien vers notre site web, vous devez nous en informer en envoyant un e-mail &agrave; Challenge For Earth. Veuillez inclure votre nom, le nom de votre organisation, vos coordonn&eacute;es ainsi que l'URL de votre site, une liste de toutes les URL &agrave; partir desquelles vous avez l'intention de cr&eacute;er un lien vers notre site web, et une liste des URL de notre site vers lesquelles vous souhaitez cr&eacute;er un lien. Attendez 2 &agrave; 3 semaines pour obtenir une r&eacute;ponse.</p>
                        <p class="description-black">Les organisations approuv&eacute;es peuvent &eacute;tablir un hyperlien vers notre site web de la mani&egrave;re suivante :</p>
                        <ul>
                        <li>Par l'utilisation de notre d&eacute;nomination sociale ; ou</li>
                        <li>Par l'utilisation du localisateur de ressources uniforme vers lequel le lien est &eacute;tabli ; ou</li>
                        <li>Par l'utilisation de toute autre description de notre site web faisant l'objet d'un lien qui a du sens dans le contexte et le format du contenu du site web de la partie liante.</li>
                        </ul>
                        <p class="description-black">Aucune utilisation du logo ou d'autres illustrations de Challenge For Earth ne sera autoris&eacute;e pour la cr&eacute;ation de liens en l'absence d'un accord de licence de marque.</p>
                        <h2>Responsabilit&eacute; du contenu :</h2>
                        <p class="description-black">Nous ne serons pas tenus responsables du contenu qui appara&icirc;t sur votre site web. Vous acceptez de nous prot&eacute;ger et de nous d&eacute;fendre contre toutes les r&eacute;clamations qui sont soulev&eacute;es sur votre site web. Aucun lien ne doit appara&icirc;tre sur un site web qui pourrait &ecirc;tre interpr&eacute;t&eacute; comme diffamatoire, obsc&egrave;ne ou criminel, ou qui enfreint, viole de toute autre mani&egrave;re, ou pr&eacute;conise l'infraction ou toute autre violation des droits d'un tiers.</p>
                        <h2>R&eacute;serve de droits :</h2>
                        <p class="description-black">Nous nous r&eacute;servons le droit de vous demander de supprimer tous les liens ou un lien particulier vers notre site web. Vous acceptez de retirer imm&eacute;diatement tous les liens vers notre site web sur demande. Nous nous r&eacute;servons &eacute;galement le droit de modifier &agrave; tout moment les pr&eacute;sentes conditions g&eacute;n&eacute;rales et sa politique en mati&egrave;re de liens. En &eacute;tablissant continuellement des liens vers notre site web, vous acceptez d'&ecirc;tre li&eacute; &agrave; ces conditions g&eacute;n&eacute;rales de liaison et de les suivre.</p>
                        <h2>Suppression des liens de notre site web :</h2>
                        <p class="description-black">Si vous trouvez un lien sur notre site web qui est offensant pour une raison quelconque, vous &ecirc;tes libre de nous contacter et de nous informer &agrave; tout moment. Nous examinerons les demandes de suppression de liens, mais nous ne sommes pas oblig&eacute;s de le faire ou de vous r&eacute;pondre directement.</p>
                        <p class="description-black">Nous ne garantissons pas l'exactitude des informations figurant sur ce site web. Nous ne garantissons pas leur exhaustivit&eacute; ou leur exactitude, et nous ne promettons pas non plus de garantir que le site web reste disponible ou que le mat&eacute;riel sur le site web est maintenu &agrave; jour.</p>
                        <h2>Avis de non-responsabilit&eacute; :</h2>
                        <p class="description-black">Dans la mesure maximale autoris&eacute;e par la loi applicable, nous excluons toutes les repr&eacute;sentations, garanties et conditions relatives &agrave; notre site web et &agrave; l'utilisation de ce site web. Rien dans cette clause de non-responsabilit&eacute; ne pourra :</p>
                        <ul>
                        <li>limiter ou exclure notre ou votre responsabilit&eacute; en cas de d&eacute;c&egrave;s ou de dommages corporels ;</li>
                        <li>limiter ou exclure notre ou votre responsabilit&eacute; en cas de fraude ou de fausse d&eacute;claration frauduleuse ;</li>
                        <li>limiter l'une de nos ou de vos responsabilit&eacute;s d'une mani&egrave;re qui n'est pas autoris&eacute;e par la loi applicable ; ou</li>
                        <li>exclure l'une de nos ou de vos responsabilit&eacute;s qui ne peuvent &ecirc;tre exclues en vertu de la loi applicable.</li>
                        </ul>
                        <p class="description-black">Les limitations et interdictions de responsabilit&eacute; fix&eacute;es dans cette section et ailleurs dans cette clause de non-responsabilit&eacute; : (a) sont soumises au paragraphe pr&eacute;c&eacute;dent ; et (b) r&eacute;gissent toutes les responsabilit&eacute;s d&eacute;coulant de la clause de non-responsabilit&eacute;, y compris les responsabilit&eacute;s contractuelles, d&eacute;lictuelles et pour violation d'une obligation l&eacute;gale.</p>
                        <p class="description-black">Tant que le site web et les informations et services du site web sont fournis gratuitement, nous ne serons pas responsables de toute perte ou dommage de quelque nature que ce soit.</p>
                        
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection