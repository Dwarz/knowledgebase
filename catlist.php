<?php

require "app.php";

require "model.php";

if (isset($_GET["search"])){
	$search = $_GET["search"]; //hier wordt bepaald of er een zoekwoord ( ?search=zoekwoord ) is meegegeven in de url, zo ja, dan wordt de if uitgevoerd. Zo nee, dan doet ie er niks mee
}


$cats = array(); // array cats aanmaken
foreach($categorien as $categorie ) {  //er wordt door alle categorieen heengelopen en die worden naar categorie gekopieerd
$categorie["artikelen"]= array() ;
	foreach($rel_cat_art as $relatie) { // er wordt door alle rel_cat_art heengelopen end ie worden naar relatie gekopieerd
		if( $relatie["categorie"] == $categorie["id"] ){  // als het nummer van een van de relaties gelijk is aan het gevraagde id wordt het volgende uitgevoerd
			$artikel_id = $relatie["artikel"]; // van de gevonden relatie stopt ie het artikelnummer in $artikel_id
			$artikel = $artikelen[$artikel_id]; // het artikel met het id wordt in zn geheel in $artikel gestopt
				if (isset ($search)) { // controleren of er een zoekterm is ingegeven
					if ( strpos( $artikel["title"] , $search )!==false ){ // controleren of de zoekterm met de title van het artikel matcht met strpos(zoekplaats , zoekterm) de !==false betekent dat ook als het op plaats 0 (eerste teken wat hij tegenkomt) wordt gevonden, het toch wordt doorgegeven.
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