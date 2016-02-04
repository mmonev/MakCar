<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Регистрирај се</title>
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
							<a href="profil.php">ПРОФИЛ</a>
						</li>
                        <li>
							<a href="odjavise.php">ОДЈАВИ СЕ</a>
						</li>
					</ul>
				</div>
			</div>
			<div id="contents">
				<div class="box">
					<div>
						<div id="contact" class="body" style="height: 800px;">
<?php 
if (session_status() == PHP_SESSION_NONE)
session_start();
echo "<h1>{$_SESSION['logiranime']}</h1>";
$conn = mysql_connect("localhost","root");
mysql_select_db("avtomobili");
$rezultat = mysql_fetch_assoc( mysql_query("SELECT korisnici.ime as imekorisnik ,korisnici.prezime as prezimekorisnik,
email,datanaragjanje,ulica,brojulica,opstina,drzava,
telefon FROM korisnici WHERE idkorisnici = ".$_SESSION['logiranid'].";"));

?>
							
								<table align="center" style="position:relative; top:50px; border: 2px solid green;">
									<tbody>
										<tr>
											<td>Име:</td>
											<td><h3 name="ime" class="txtfield"><?php echo $rezultat['imekorisnik']; ?></h3></td>
										</tr> 										<tr>
											<td>Презиме:</td>
											<td><h3 name="prezime" class="txtfield"><?php echo $rezultat['prezimekorisnik']; ?></h3></td>
										</tr>
                                        <tr>
											<td>E-МАИЛ:</td>
											<td><h3 name="email" class="txtfield"><?php echo $rezultat['email'];?></h3></td>
										</tr>                                      
                                        <tr>
											<td>Дата на раѓање:</td>
											<td><h3 name="datanaragjanje" class="txtfield"><?php echo $rezultat['datanaragjanje'];?></h3></td>
										</tr> <tr>
											<td>Улица:</td>
											<td><h3 name="ulica" class="txtfield"><?php echo $rezultat['ulica'];?></h3></td>
										</tr>
                                        <tr>
											<td>Број на улица:</td>
											<td><h3 name="brojulica" class="txtfield"><?php echo $rezultat['brojulica'];?></h3></td>
										</tr>
                               			                                        <tr>
											<td>Општина:</td>
											<td><h3 name="opstina" class="txtfield"><?php echo $rezultat['opstina'];?></h3></td>
										</tr>
                                                                                						<tr>
											<td>Држава:</td>
											<td><h3 name="drzava" class="txtfield"><?php echo $rezultat['drzava'];?></h3></td>
										</tr>
                                                                                						<tr>
											<td>Телефон:</td>
											<td><h3 name="telefon" class="txtfield"><?php echo $rezultat['telefon'];?></h3></td>
										</tr>
    
									</tbody>
								</table>
                            
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

						<li>
							<a href="kontakt.php">КОНТАКТ</a>
						</li>
                        <li class="active">
							<a href="profil.php">ПРОФИЛ</a>
						</li>
                        <li>
							<a href="odjavise.php">ОДЈАВИ СЕ</a>
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