<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP Örneğimiz</title>
</head>
<body>

<?php if ( !isset( $_GET["id"])  ) { ?>

	<h1>Nuri'nin Teknoloji Bloğu...</h1>
	<ul>
	<?php
		require_once "admin/config.php";
		$SQL = "SELECT * FROM yazilar ORDER BY id DESC";
		$kayitlar = mysqli_query($mysqli, $SQL);

		while($kayit = mysqli_fetch_array($kayitlar) ) {
			echo sprintf("<li><a href='index.php?id=%s'>%s</a><br>
				 Yazarı: %s, Yayın Tarihi: %s </li>",
				$kayit["id"], 
				$kayit["baslik"], 
				$kayit["yazar"], 
				date("d.m.Y", strtotime($kayit["tarih"]))
				);
		}
	?>
	</ul>

<?php } // if ( !isset( $_GET["id"])  ) { ?>


<?php 

	if( isset( $_GET["id"]) ) { 

		require_once "admin/config.php";

		$SQL = sprintf("SELECT * FROM yazilar WHERE id = '%s' ", $_GET["id"]) ;
		$kayitlar = mysqli_query($mysqli, $SQL);
		$kayit = mysqli_fetch_array($kayitlar);

		echo "<a href='index.php'>Geri dön...</a>";
		echo "<h1>" . $kayit["baslik"] . "</h1>";

		echo nl2br($kayit["yazi"]);

	}

?>


</body>
</html>