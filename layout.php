<!DOCTYPE html>
<html>
<head>
	<title>My web site</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<header>
		<a class="back_home" href="index.php">
			<img class="logo" src="logo.png">
			<h1 class="title">recette a gogo!!</h1>
		</a>	
	</header>
	<div class="middle">
		<nav>
		<a href="page2.php"> page2</a>
		</nav>
		<div class="content">
		<?php
			if (isset($content)) {
				echo $content;
			}
		?>
		</div>
	</div>
	<footer>
		footer
	</footer>
</body>
</html>