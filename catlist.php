<?php

require "app.php";

require "model.php";

$cats = array(); // array cats aanmaken
foreach($categorien as $categorie ) {  //er wordt door alle categorieen heengelopen en die worden naar categorie gekopieerd
$categorie["artikelen"]= array() ;
	foreach($rel_cat_art as $relatie) { // er wordt door alle rel_cat_art heengelopen end ie worden naar relatie gekopieerd
		if( $relatie["categorie"] == $categorie["id"] ){  // als het nummer van een van de relaties gelijk is aan het gevraagde id wordt het volgende uitgevoerd
			$artikel_id = $relatie["artikel"]; // van de gevonden relatie stopt ie het artikelnummer in $artikel_id
			$artikel = $artikelen[$artikel_id]; // het artikel met het id wordt in zn geheel in $artikel gestopt
			
			$categorie["artikelen"][] = $artikel; //$artikel wordt toegevoegd aan de eerste legen plaats in $categorie["artikelen"]
		}
	}
	$cats[] = $categorie; //de inhoud van categorie wordt in cats geplaatst
}

require( "cat_template.php" );
?>
