<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>За нас</title>
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
						<li class="selected">
							<a href="zanas.php">ЗА НАС</a>
						</li>

						<li>
							<a href="kontakt.php">КОНТАКТ</a>
						</li>

<?php
if (session_status() == PHP_SESSION_NONE)
	session_start();
    if(isset($_SESSION['logiranemail']))
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
	<div class="body">
	<h1>ЗА НАС</h1>
	<p>
Компанијата која е овластен увозник за возилата VW, Ауди, Шкода, Сеат и Форд е основана во 2000 година. Располагаме со нови возила од VW, Ауди, Шкода, Сеат и Форд. На нашиот сајт можете да ги погледнете сите модели од горенаведените компании, а воедно можете и да додадете дополнителна опрема доколку не сте задоволни од сериска.  Доколку имате прашања контактирајте не. Слободно прашајте што ве интересира. Нашиот продажен салон се наоѓа на Бул. Индустриска бб.  Повелете. Посетете не!
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
						<li  class="active">
							<a href="zanas.php">ЗА НАС</a>
						</li>

						<li>
							<a href="kontakt.php">КОНТАКТ</a>
						</li>
<?php
if (session_status() == PHP_SESSION_NONE)
	session_start();
    if(isset($_SESSION['logiranemail']))
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
