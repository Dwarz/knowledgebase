<?php

require "app.php";

require "model.php";

if (isset($_GET["id"])){
	$id = $_GET["id"]; //hier wordt bepaald of er een bepaald artikel wordt opgevraagd, zo nee, dan wordt hij bij de Else ingesteld
}
else {
	$id = 1;
}

$artikel=$artikelen[$id]; //wordt verder gebruikt in template
$catlist= array (); //de array $catlist wordt aangemaakt, deze wordt gebruikt in de template

foreach($rel_cat_art as $item ) { // er wordt door alle relaties tussen artikelen/categorieen heengelopen en ze worden allemaal naar $item gekopieerd
	if( $item["artikel"] == $id ){ // als het artikelnummer van een van de items (relaties dus) gelijk is aan het gevraagde artikel wordt het volgende uitgevoerd
		$categorienummer = $item["categorie"]; //van het betreffende item wordt de categorie opgeslagen in $categorienummer
		$catlist[] = $categorien[$categorienummer]; //uit de array categorien wordt de betreffende categorie (in zijn geheel) gepakt, en naar catlist gekopieerd, zodat daar de naam getoond kan worden (dit gebeurt in de template)
	}
}

require( "template.php" );
?>