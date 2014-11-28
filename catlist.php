<?php

require "app.php";

require "model.php";

$cats = array();
foreach($categorien as $categorie ) { 
	foreach($rel_art_cat as $relatie) {
		if( $item["categorie"] == $categorie["id"] ){ 
			$artikel_id = $item["artikel"]; 
			$artikel = $artikelen[$artikel_id]; 
			$categorie["artikelen"][] = $artikel;
		}
	}
	$cats[] = $categorie;
}

require( "cat_template.php" );
?>