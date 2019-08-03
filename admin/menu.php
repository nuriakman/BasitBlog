<?php
	require_once "oturumkontrolu.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP Örneğimiz</title>
</head>
<body>

	<h1>Yönetim Paneli</h1>

	<p>Aktif Kullanıcı: <?php echo $_SESSION["adisoyadi"]; ?></p>

	<ul>
		<li><a href="yazi_ekleme_formu.php">Yazı Ekle</a></li>
		<li><a href="listele.php">Listele/Güncelle/Sil</a></li>
		<li><a href="paroladegistir.php">Parola Değiştir</a></li>
		<li><a href="oturumukapat.php"><?php echo $_SESSION["adisoyadi"]; ?> Oturumunu Kapat</a></li>
	</ul>

</body>
</html>