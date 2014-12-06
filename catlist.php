<?php

require "app.php";

require "model.php";



if (isset($_GET["search"])){
	$search = $_GET["search"]; //hier wordt bepaald of er een zoekwoord ( ?search=zoekwoord ) is meegegeven in de url, zo ja, dan wordt de if uitgevoerd. Zo nee, dan doet ie er niks mee
	}

if (isset($_POST["zoekfunctie"])){ // post reageert op wat er in de zoekbalk is ingevuld
	$search = $_POST["zoekfunctie"];
	}
	
$zoekopdracht="zoeken"; //als we tonen de tekst "zoeken" in de zoekbalk, zodat het duidelijk is dat het een zoekbalk is (zoeken wordt overschreven zodra er een zoekterm is ingevuld)
	
if (isset($search)){ //hiermee checkt hij of $search bestaat, wat betekent dat er een zoekterm is ingevuld. 
		if ($search==""){ //met deze if controleren we of de search niet leeg is, gezien dit errors geeft. Als het wel leeg is wordt $search weer verwijderd
			unset ($search) ; 
		}
		else {
			$zoekopdracht = $search; //Als er een zoekterm is ingevuld wordt die term ook in $zoekopdracht gezet, zodat we op de pagina weten waarop we gezocht hebben
		}
}

$cats = array(); // array cats aanmaken
$gekozen_categorien = array () ;
if ( !isset($_POST["dropdown"]) or  $_POST["dropdown"]=="alles" ) { //door de ! bij de isset wordt de if hoe dan ook uitgevoerd als je via de adresbalk op de site kwam (zonder de zoekfunctie te gebruiken dus). Als dat niet van toepassing is gaat hij verder bij or en wordt gecontroleerd of "alles" in de dropdown staat
	$gekozen_categorien=$categorien; //alle categorieen worden nu in gekozen_categorien gezet, want of "alles" is aangeklikt, of je komt net op de site
}
else {
	$gekozen_categorie=$_POST["dropdown"];
	$gekozen_categorien[] = $categorien[$gekozen_categorie];
}
	
foreach($gekozen_categorien as $categorie ) {  //er wordt door de gekozen categorieen heengelopen en die worden naar categorie gekopieerd
$categorie["artikelen"]= array() ;
	foreach($rel_cat_art as $relatie) { // er wordt door alle rel_cat_art heengelopen en die worden naar relatie gekopieerd
		if( $relatie["categorie"] == $categorie["id"] ){  // als het nummer van een van de relaties gelijk is aan het gevraagde id wordt het volgende uitgevoerd
			$artikel_id = $relatie["artikel"]; // van de gevonden relatie stopt ie het artikelnummer in $artikel_id
			$artikel = $artikelen[$artikel_id]; // het artikel met het id wordt in zn geheel in $artikel gestopt
				if (isset ($search)) { // controleren of er een zoekterm is ingegeven
					if ( strpos( $artikel["title"] , $search )!==false or strpos( $artikel["content"] , $search )!==false ){ // controleren of de zoekterm met de title van het artikel matcht met strpos(zoekplaats , zoekterm) de !==false betekent dat ook als het op plaats 0 (eerste teken wat hij tegenkomt) wordt gevonden, het toch wordt doorgegeven.
							$categorie["artikelen"][] = $artikel; //$artikel wordt toegevoegd aan de eerste lege plaats in $categorie["artikelen"]
					}
				}	
				else {
						$categorie["artikelen"][] = $artikel; //$artikel wordt toegevoegd aan de eerste lege plaats in $categorie["artikelen"]
				}
		}
	}
	$cats[] = $categorie; //de inhoud van categorie wordt in cats geplaatst
}

require( "cat_template.php" );
?>