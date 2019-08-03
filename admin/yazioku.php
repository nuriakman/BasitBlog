<?php
	require_once "oturumkontrolu.php";
	
	require_once "config.php";

	$SQL = sprintf("SELECT * FROM yazilar WHERE id = '%s' ", $_GET["id"]) ;
	$kayitlar = mysqli_query($mysqli, $SQL);
	$kayit = mysqli_fetch_array($kayitlar);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP Örneğimiz</title>
</head>
<body>

	<a href="menu.php">Ana Sayfa</a>

	<h1><?php echo $kayit["baslik"]; ?></h1>

	<?php echo nl2br($kayit["yazi"]); ?>


	<p><a href="yaziguncelle.php?id=<?php echo $kayit["id"]; ?>">Güncelle...</a></p>

</body>
</html>