<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Контакт</title>
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

						<li class="selected">
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
						<div id="contact" class="body" style="height:500px">
							<h1>КОНТАКТ</h1>
							<form action="kontaktprati.php" method="post" class="kontakt" style="position:relative;top:0px;">
								<table>
									<tbody>
										<tr>
											<td>Име:</td>
											<td><input name="ime"type="text" value="" class="txtfield"></td>
										</tr> <tr>
											<td>Презиме:</td>
											<td><input name="prezime" type="text" value="" class="txtfield"></td>
										</tr>
										
										 <tr>
											<td>Предмет:</td>
											<td><input name="predmet"type="text" value="" class="txtfield"></td>
										</tr> <tr>
											<td class="txtarea">Порака:</td>
											<td><textarea name="poraka"></textarea></td>
										</tr> <tr>
											<td></td>
											<td><input type="submit" value="Испрати" class="fancykopce" style="width:150px; height:30px;"></td>
										</tr>
									</tbody>
								</table>
							</form>

							<p>
								<span>АДРЕСА:</span>Бул. Индустриска бб.
							</p>
							<p>
								<span>Телефонски Број</span>078-123-456
							</p>
							<p>
								<span>Факс:</span>02-321-123
							</p>
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

						<li  class="active">
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