<?php
	$title = "style";
	$head = "style";
	$subhead = "css";
	$content = "de <style> en </style> tags in de head passen de css rechtstreeks in de html aan. Het is beter dit te vermijden en een cssdocument aan te maken om vanuit de html daarheen te verwijzen.

			Je kunt de style ook als tag in een div gebruiken, wat echter ook afgeraden wordt. Het ziet er dan zo uit:

			&lt;div style=color:\"red\"&gt;&lt;/div&gt;

			Deze style is de eerste in de volgorde waarop stijlinformatie wordt toegepast.
			Wanneer er iets niet in de style staat wordt verder gekeken naar id, class, tag en als laatst parent.";
			
	require( "template.php" );
?>