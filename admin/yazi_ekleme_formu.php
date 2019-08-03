<?php
	require_once "oturumkontrolu.php";

	if ( isset($_POST["yazar"]) ) {
		// Form submit edilmiş demektir...
		// echo "<pre>"; print_r($_POST); echo "</pre>";
		require_once "config.php";

		$SQL = sprintf("INSERT INTO yazilar (yazar, tarih, baslik, yazi) 
					   VALUES('%s', '%s', '%s', '%s')", 
					   $_POST["yazar"], $_POST["tarih"], $_POST["baslik"], $_POST["yazi"]);
		$result = mysqli_query($mysqli, $SQL);

		header("Location: islemtamam.php");

		die();
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP Örneğimiz</title>
</head>
<body>

<a href="menu.php">Ana Sayfa</a>

	<h1>Yazı Ekleyelim...</h1>

	<form action="" method="post">
		
		<p>Yazarı: <b style="color:darkred;"><?php echo $_SESSION["adisoyadi"]; ?></b>
		<input type="hidden" name="yazar" value="<?php echo $_SESSION["adisoyadi"]; ?>"></p>
		<p>Yayın Tarihi: <input type="text" name="tarih" value="" placeholder="yıl-ay-gun formatında"></p>
		<p>Yazı Başlığı: <input type="text" name="baslik" value="" placeholder=""></p>
		<p>Yazı İçeriği: <textarea name="yazi" style="width: 500px; height:150px;"></textarea></p>

		<button type="submit">Gönder</button>
	</form>

</body>
</html>