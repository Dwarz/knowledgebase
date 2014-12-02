
<html>
	<head>
		<title>Categorien</title>
		<link rel="stylesheet" href="main.css">
	</head>
	<body>
		<h1>Beschikbare categorien:</h1>
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