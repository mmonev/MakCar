
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Испратена порака</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="pozadina">
		<div id="predendel">
			<div id="header">
				<div id="logo">
					<a href="index.php"><img src="sliki/logo.png" alt="LOGO" height="120" width="300"></a>
				</div>
				<div id="glavnomeni">
					<ul>
						<li>
							<a href="index.php">ДОМА</a>
						</li>
						<li>
							<a href="odberiavtomobil.php?proizvoditel=site">АВТОМОБИЛИ</a>
						</li>
						<li>
							<a href="zanas.php">ЗА НАС</a>
						</li>

						<li  class="selected">
							<a href="kontakt.php">КОНТАКТ</a>
						</li>
<?php
	if (session_status() == PHP_SESSION_NONE)
	session_start();
	
       if(isset($_SESSION['logiran']) && $_SESSION['logiran']==true)
		echo   '<li>
				<a href="profil.php">ПРОФИЛ</a></li>
	<li>
				<a href="odjavise.php">ОДЈАВИ СЕ</a></li>';
	else echo '<li>
				<a href="logiranje.php">ЛОГИРАЈ СЕ</a></li>'
	?>
					</ul>
				</div>
			</div>
			<div id="contents">
				<div class="box">
					<div>
						<div id="contact" class="body">
                        <?php 
   if(isset($_SESSION['logiran']) && $_SESSION['logiran']==true){
	$poraka = "Ime i prezime:".$_SESSION['logiranime'].$_POST['poraka'];
mail("martin@makcar.com",$_POST['predmet'],$poraka);
}
else mail("martin@makcar.com",$_POST['predmet'],"Ime i prezime:".$_POST['ime']." ".$_POST['prezime']." ".$_POST['poraka']);
echo '<p>Вашата порака е испратена ви благодариме</p>';
?>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="footer">
			<div>
				<ul class="glavnomeni">
						<li>
							<a href="index.php">ДОМА</a>
						</li>
						<li>
							<a href="odberiavtomobil.php?proizvoditel=site">АВТОМОБИЛИ</a>
						</li>
						<li>
							<a href="zanas.php">ЗА НАС</a>
						</li>

						<li class="active">
							<a href="kontakt.php">КОНТАКТ</a>
						</li>

<?php
	if (session_status() == PHP_SESSION_NONE)
	session_start();
       if(isset($_SESSION['logiran']) && $_SESSION['logiran']==true)
		echo   '<li>
				<a href="profil.php">ПРОФИЛ</a></li>
	<li>
				<a href="odjavise.php">ОДЈАВИ СЕ</a></li>';
	else echo '<li>
				<a href="logiranje.php">ЛОГИРАЈ СЕ</a></li>'
	?>
				</ul>
				
			</div>
			<p align="center" style="color:#FFF">
				© 2015 All Rights Reserved
			</p>
		</div>
	</div>
</body>
</html>