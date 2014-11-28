<?php 
$artikelen= array ();
$artikel= array ();
	$artikel["title"]="table";
	$artikel["id"]=1;
	$artikel["head"]="table";
	$artikel["example"]="
		<div class=\"example\">
<pre>
&lt;table&gt;
	&lt;thead&gt;
		&lt;tr&gt;
			&lt;th&gt;1e rij, 1e kolom&lt;/th&gt;
			&lt;th&gt;1e rij, 2e kolom&lt;/th&gt;
		&lt;/tr&gt;
	&lt;/thead&gt;
	&lt;tbody&gt;
		&lt;tr&gt;
			&lt;td&gt;2e rij, 1e kolom&lt;/td&gt;
			&lt;td&gt;2e rij, 2e kolom&lt;/td&gt;
		&lt;/tr&gt;
	&lt;/tbody&gt;
&lt;/table&gt;
</pre>

			<p>geeft als voorbeeld:</p>

			<table>
				<thead>
					<tr>
						<th>1e rij, 1e kolom</th>
						<th>1e rij, 2e kolom</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>2e rij, 1e kolom</td>
						<td>2e rij, 2e kolom</td>
					</tr>
				</tbody>
			</table>
		</div>
";
		
	$artikel["content"]="
			<p>Met " . spanTag( "&lt;table&gt;" ) . " en <span class=\"tag\">&lt;/table&gt;</span> maak je een tabel.
			met wat tussen <span class=\"tag\">&lt;thead&gt;</span> en <span class=\"tag\">&lt;/thead&gt;</span> staat zet je de kopjes boven iedere kolom.</p>
			 
			<p>Alles wat tussen <span class=\"tag\">&lt;tr&gt;</span> en <span class=\"tag\">&lt;/tr&gt;</span> staat, staat op 1 rij, je gebruikt de tr zowel in de thead als in de tbody.</p>
			 
			<p>wil je de inhoud van een cel dikgedrukt zetten (bijvoorbeeld bij de bovenste rij), dan gebruik je <span class=\"tag\">&lt;th&gt;</span> (table head). wil je het als gewone tekst weergeven dan gebruik je <span class=\"tag\">&lt;td&gt;</span> (Table data)</p>
			 
			<p>Standaard heeft een tabel geen lijnen, wil je wel lijnen om je vakken beter te kunnen onderscheiden dan kan je <span class=\"tag\">border=\"\"</span> opnemen in je table. Dat ziet er dan bijvoorbeeld zo uit: <span class=\"tag\">&lt;table border=\"1\"&gt;</span> </p>
			 
			<p>Wil je van meerdere rijen of kolommen samenvoegen tot 1 vak dan kan je daar de colspan en rowspan voor gebruiken, deze kan je in de <span class=\"tag\">&lt;th&gt;</span> of <span class=\"tag\">&lt;td&gt;</span> voor de betreffende rij/colom zetten.</p>

			<p>Note: alles van links naar rechts is 1 rij, alles van boven naar onder is 1 kolom</p>
			  
			<p>Een simpele tabel ziet er bijvoorbeeld zo uit:</p>
			
			" . $artikel["example"] . " ";
$artikelen[1]=$artikel;
	
$artikel= array ();
	$artikel["title"] ="style";
	$artikel["id"]=2;	
	$artikel["head"] ="style";
	$artikel["content"] ="<p>De <style> en </style> tags in de head passen de css rechtstreeks in de html aan. Het is beter dit te vermijden en een cssdocument aan te maken om vanuit de html daarheen te verwijzen.</p>

			<p>Je kunt de style ook als tag in een div gebruiken, wat echter ook afgeraden wordt. Het ziet er dan zo uit:</p>

			<p>&lt;div style=color:\"red\"&gt;&lt;/div&gt;</p>

			<p>Deze style is de eerste in de volgorde waarop stijlinformatie wordt toegepast.<br />
			Wanneer er iets niet in de style staat wordt verder gekeken naar id, class, tag en als laatst parent.</p>";	
$artikelen[2]=$artikel;	
	
$artikel= array ();
	$artikel["title"] = "ahref";
	$artikel["id"]=3;
	$artikel["head"] = "ahref";
	$artikel["content"] = "<p>De a href gebruik je om links mee te maken. </p> 
			<p>&lt;a href=\"url\"&gt;tekst&lt;/a&gt; toont de tekst, als je erop klikt ga je naar de url.<br />
			in plaats van een url kan je er echter ook andere links insteken, zoals bestanden op je computer.</p>";
	$artikelen[3]=$artikel;
	
$artikel= array ();
	$artikel["title"] = "body";
	$artikel["id"]=4;
	$artikel["head"] = "body";
	$artikel["content"] = "<p>Tussen de <body> en </body> tags zet je de inhoud van de pagina. Iedere pagina heeft deze tags, ze komen direct na de </head> tag en voor de </html> tag.</p>";
	$artikelen[4]=$artikel;
	
$artikel= array ()	;
	$artikel["title"] = "array";
	$artikel["id"]=5;
	$artikel["head"]= "array";
	$artikel["content"]= '<p>Een array is een soort variabele waar je niet 1, maar meerdere dingen (values) in kunt opslaan. Je kunt iedere value een key(woord) geven om ze makkelijker op te zoeken, als je de key leeg laat maakt hij er uit zichzelf het laagste niet gebruikte getal van. </p>
	
	<p>een deel van de opmaak van dit array ziet er bijvoorbeeld zo uit: <br />
	$artikel= array ()	// maak een lege straat aan <br />
	$artikel[2] = "jansen"; // achter huisnummer 2 woont nu "jansen" (een = teken is een toewijzing aan de straat)<br />
	$artikel[2];  // zoek de eigenaar van huisnummer 2 (en doe er niks mee)<br />
	$bewoner = $artikel[2] // zoek de eigenaar van huisnummer 2 en sla deze op in $bewoner
	$artikel[] = "pietersen"; // plaats bewoner "pietersen" in het eerste vrije huis
	$artikel["subhead"]= "php"; <br />
	$artikelen[]=$artikel  &lt;- die pleurt dus de variabele in $artikelen op het eerstvolgende nummer.	';
$artikelen[5]=$artikel;

$artikel= array ();
	$artikel["title"] = "isset";
	$artikel["id"]=6;
	$artikel["head"] = "isset";
	$artikel["content"] = '<p>Met isset kan je controleren of een variabele al bestaat. Je typt dan isset($variabele) en krijgt dan als antwoord true or false.</p>';
	$artikelen[6]=$artikel;

	$artikel= array ();
	$artikel["title"] = '$_GET';
	$artikel["id"]=7;
	$artikel["head"] = '$_GET';
	$artikel["content"] = '<p>De $_GET["iets"] haalt informatie uit de url, zo kan je met $_GET["id"] controleren of iemand http://website.nl/index.php?id=bla heeft ingevuld, in het geval van het voorbeeld krijg je bla terug als antwoord</p>';
	$artikelen[7]=$artikel;
	
$categorien= array ();
$categorie= array ();
	$categorie["name"]="php";
	$categorie["beschrijving"]="bla";
	$categorie["id"]=1;
	$categorien[1]=$categorie;
	
$categorie= array ();
	$categorie["name"]="html";
	$categorie["beschrijving"]="bla";
	$categorie["id"]=2;
	$categorien[2]=$categorie;
	
$categorie= array ();
	$categorie["name"]="css";
	$categorie["beschrijving"]="bla";
	$categorie["id"]=3;
	$categorien[3]=$categorie;
	
$categorie= array ();
	$categorie["name"]="git";
	$categorie["beschrijving"]="bla";
	$categorie["id"]=4;
	$categorien[4]=$categorie;
	
$rel_cat_art= array ();
$rel=array ()	;
		$rel["artikel"]=1;
		$rel["categorie"]=2;
		$rel_cat_art[]=$rel;
	
$rel=array ()	;
		$rel["artikel"]=1;
		$rel["categorie"]=3;
		$rel_cat_art[]=$rel;
		
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>