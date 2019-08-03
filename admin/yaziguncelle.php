<?php
	require_once "oturumkontrolu.php";

	if ( isset($_POST["yazar"]) ) {

		if ( $_POST["silinsin"] == "EVET") {
			require_once "config.php";
			$id = $_POST["id"];
			$SQL = "DELETE FROM yazilar WHERE id = '$id' ";
			$result = mysqli_query($mysqli, $SQL);
			header("Location: islemtamam.php");
			die();
		}

	}

	if ( isset($_POST["yazar"]) ) {
		// Form submit edilmiş demektir...
		// echo "<pre>"; print_r($_POST); echo "</pre>";
		require_once "config.php";

		$SQL = sprintf("UPDATE yazilar SET 
						yazar  = '%s', 
						tarih  = '%s', 
						baslik = '%s', 
						yazi   = '%s'
						WHERE id = '%s'", 
					   $_POST["yazar"], 
					   $_POST["tarih"], 
					   $_POST["baslik"], 
					   $_POST["yazi"], 
					   $_POST["id"] );
		$result = mysqli_query($mysqli, $SQL);

		header("Location: islemtamam.php");
		die();
	}





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


	<h1>Yazıyı Güncelleyin...</h1>

	<form action="" method="post">
		
		<p>Kayıt No: <?php echo $kayit["id"]; ?> <input type="hidden" name="id" value="<?php echo $kayit["id"]; ?>"></p>
		
		<p>Yazarı: <b style="color:darkred;"><?php echo $_SESSION["adisoyadi"]; ?></b>
		<input type="hidden" name="yazar" value="<?php echo $_SESSION["adisoyadi"]; ?>"></p>

		<p>Yayın Tarihi: <input type="text" name="tarih" value="<?php echo $kayit["tarih"]; ?>"></p>
		<p>Yazı Başlığı: <input type="text" name="baslik" value="<?php echo $kayit["baslik"]; ?>"></p>
		<p>Yazı İçeriği: <textarea name="yazi" style="width: 500px; height:150px;"><?php echo $kayit["yazi"]; ?></textarea></p>
		<p>Silinsin mi?: <input type="text" name="silinsin" value="">
			<i><small><small>(Silmek için EVET yazınız)</small></small></i></p>

		
		<button type="submit">Güncelle</button>
	</form>


</body>
</html>