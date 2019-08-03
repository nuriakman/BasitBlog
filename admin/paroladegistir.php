<?php
	require_once "oturumkontrolu.php";

	if ( isset($_POST["pass1"]) ) {
		if( $_POST["pass2"] != $_POST["pass3"] ) {
			echo "Yeni Parola yanı değil...";
			die();
		}	
	}

	if ( isset($_POST["pass1"]) ) {
		// Form submit edilmiş demektir...
		// echo "<pre>"; print_r($_POST); echo "</pre>";
		require_once "config.php";

		$SQL = sprintf("UPDATE kullanicilar SET 
						kullaniciparolasi  = '%s'
						WHERE id = '%s' AND kullaniciparolasi = '%s' ", 
					   $_POST["pass2"], $_SESSION["id"], $_POST["pass1"] );
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


	<h1>Parolanızı Güncelleyin...</h1>

	<form action="" method="post">
		
		<p>Adı Soyadı: <?php echo $_SESSION["adisoyadi"]; ?></p>
		
		<p>Mevcut Parolanız: 
		<input type="password" name="pass1" value=""></p>

		<p>Yeni Parolanız: 
		<input type="password" name="pass2" value=""></p>

		<p>Yeni Parolanız (Tekrar): 
		<input type="password" name="pass3" value=""></p>

		
		<button type="submit">Güncelle</button>
	</form>


</body>
</html>