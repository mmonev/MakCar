<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Mak-Car</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<script src = "javascript/indexsliki.js"></script>
<body onLoad="promenanaslika();">

	<div id="pozadina">
		<div id="predendel">
			<div id="header">
			  <div id="logo">
					<a href="index.php"><img src="sliki/logo.png" alt="LOGO" height="120" width="300"></a>
				</div>
				<div id="glavnomeni">
					<ul>
						<li class="selected">
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


                        
<?php
   if (session_status() == PHP_SESSION_NONE)
   session_start();
   $_SESSION['indexslika']=0;
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
        <img id="indexslika" src="sliki/pocetna/audi.png" alt="Img" width="100%" height="425">
				
					
<div id = "logoklik">
	<form action="odberiavtomobil.php" method="post">
	<input type="image" name="proizvoditel" value="Фолксваген" src = "sliki/pocetna/1.png" />
    <input type="image" src = "sliki/pocetna/2.png" name="proizvoditel" value="Шкода"/>
    <input type="image" src = "sliki/pocetna/3.png" name = "proizvoditel" value="Ауди"/>
    <input type="image" src = "sliki/pocetna/4.png" name = "proizvoditel" value ="Сеат"/>
    <input type="image" src = "sliki/pocetna/6.png" width="155" height="80"name = "proizvoditel" value ="Форд"/>
    </form>

				</div>
			</div>
		</div>
		<div id="footer">
			<div>
				<ul class="glavnomeni">
						<li  class="active">
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