<?php
	require_once "oturumkontrolu.php";

	require_once "config.php";

	$SQL = "SELECT * FROM yazilar ORDER BY id DESC";
	$kayitlar = mysqli_query($mysqli, $SQL);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP Örneğimiz</title>
</head>
<body>

	<a href="menu.php">Ana Sayfa</a>

	<h1>Blog Sitemizdeki Yazılar...</h1>

	<ul>

	<?php
		while($kayit = mysqli_fetch_array($kayitlar) ) {
			echo sprintf("<li><a href='yazioku.php?id=%s'>%s</a><br>
				 Yazarı: %s, Yayın Tarihi: %s </li>",
				$kayit["id"], 
				$kayit["baslik"], 
				$kayit["yazar"], 
				date("d.m.Y", strtotime($kayit["tarih"]))
				);
		}


	?>
		
	
	</ul>


</body>
</html>