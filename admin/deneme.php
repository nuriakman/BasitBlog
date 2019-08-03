<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP Örneğimiz</title>
</head>
<body>

	<h1>PHP Çalışıyoruz</h1>
	
	<?php
		echo "<h3>ID Değişkeni: <b>" . $_GET["id"] . "</b></h3>";
		echo "<h3>ID Değişkeni: <b>{$_GET["id"]}</b></h3>";
		echo sprintf("<h3>ID Değişkeni: <b>%s</b></h3>", $_GET["id"]);
		echo sprintf("<h3>AD Değişkeni: <b>%s</b></h3>", $_GET["ad"]);
		echo sprintf("<h3>AD Değişkeni: <b>%s</b></h3>", $_GET["soyad"]);
	?>

</body>
</html>