<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Пост-регистер</title>
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

						<li>
							<a href="kontakt.php">КОНТАКТ</a>
						</li>
                        <li class="selected">
							<a href="login.php">ЛОГИРАЈ СЕ</a>
						</li>
					</ul>
				</div>
			</div>
			<div id="contents">
				<div class="box">
					<div>
						<div id="contact" class="body" style="height: 1000px;">
		<?php 
		$conn = mysql_connect("localhost","root");
		mysql_select_db("avtomobili");
		
		$password = md5($_POST['password']);
		$query = "INSERT INTO korisnici(ime,prezime,email,ovlastuvanje,datanaragjanje,brojulica,ulica,opstina,drzava,telefon,password) VALUES ('".$_POST['ime']."',
		'".$_POST['prezime']."','".$_POST['email']."','korisnik','".$_POST['datanaragjanje']."','".$_POST['brojulica']."','".$_POST['ulica']."','".$_POST['opstina']."','".$_POST['drzava']."','".$_POST['telefon']."','".$password."');";
		if(!mysql_query($query)){
		echo mysql_error()."aaaaaa";
		}
		
		else{
			header("Location: login.php");
		}
		mysql_close($conn);
		?>
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

						<li>
							<a href="kontakt.php">КОНТАКТ</a>
						</li>
                        <li  class="active">
							<a href="logiranje.php">ЛОГИРАЈ СЕ</a>
						</li>
				</ul>
				
			</div>
			<p align="center" style="color:#FFF">
				© 2015 All Rights Reserved
			</p>
		</div>
	</div>
</body>
</html>