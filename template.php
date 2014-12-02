
<html>
	<head>
		<title><?php echo $artikel["title"]; ?></title>
		<link rel="stylesheet" href="main.css">
	</head>
	<body>
		<h1><?php echo $artikel["title"]; ?></h1>
		
		<h2>
			<?php foreach($catlist as $item ) {
			echo $item["name"]," ";
			} ?>
		</h2>
		
		
		<div class="content">
			<?php echo $artikel["content"]; ?>
		</div>

	</body>
</html>