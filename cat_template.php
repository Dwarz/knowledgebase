
<html>
	<head>
		<title>Categorien</title>
		<link rel="stylesheet" href="main.css">
	</head>
	<body>
		<h1>Beschikbare categorien:</h1>
		<form action="catlist.php" method="post">
			<select name="dropdown">
				<option value="alles">Alle categorien</option>
				<?php foreach( $categorien as $categorie ) {?>
					<option value="<?php echo $categorie["id"];?>"> <?php echo $categorie["name"];?> </option> <!-- dit gaat door alle categorieen heen en plaatst ze in de dropdownbox -->
				<?php } ?>
				
			</select>
			<input name="zoekfunctie" value="<?php echo $zoekopdracht ;?>" />  <!-- dit is een htmlcomment :D Dit staat in de sourcecode want het is html. En input moet in een form staan-->
		</form>
		<?php foreach ( $cats as $cat ) { ?>
			<h2><?php echo $cat["name"]; ?></h2>
				<ul>
				<?php foreach( $cat["artikelen"] as $artikel ){ ?>
					<li><a href="artikel.php?id=<?php echo $artikel["id"];?>"><?php echo $artikel["title"]; ?></a></li>
				<?php } ?>
				</ul>
		<?php } ?>
		

	</body>
</html>