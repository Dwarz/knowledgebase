<?php

function spanTag ( $tekst ) {
	return "<span class=\"tag\">" . $tekst . "</span>";
}

function relatie ($catid , $artid ) { // functie aanmaken die het categorie id en artikel id meekrijgt uit model.php
	$rel=array ()	;		// array aanmaken om het in op te slaan
	$rel["artikel"]= $artid;	// artikel id opslaan
	$rel["categorie"]= $catid;	// categorie id opslaan
	return $rel;			// de gehele array returnen (wordt gebruikt in model)
}

function tijdcalculator ( $tijd )	{
	//huidige tijdstip , wat we binnenkrijgen omzetten naar rekenbare zut , aftrekken , terugsturen
	$now = new DateTime ;
	$tijd = DateTime::createFromFormat (  "d-m-Y H:i" ,  $tijd );
	
	$tijdverschil= $now->diff($tijd); //dit doet tijd $now - $tijd
	
	return $tijdverschil->days . " dagen";
	
}
	

	?> 