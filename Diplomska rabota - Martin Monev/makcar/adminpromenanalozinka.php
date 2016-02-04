<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Администратор</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<script src="javascript/admin.js"></script>
<body>
<?php
if (session_status() == PHP_SESSION_NONE)
	session_start();
if(isset($_SESSION['logiranemail']))
echo '<div id="pozadina">
	  <div id="predendel">
			<div id="header">
				<div id="logo">
					<a href="index.php"><img src="sliki/logo.png" alt="LOGO" height="120" width="300"></a>
				</div>
				<div id="glavnomeni">
					<ul>
						<li style="width:286px"
                        >
							<a href="adminavtomobili.php">АВТОМОБИЛИ</a>
						</li>
						<li style="width:286px" class="selected">
							<a href="adminpromenanalozinka.php">ПРОМЕНА НА ЛОЗИНКИ</a>
						</li>
						<li style="width:286px">
							<a href="odjavise.php">ОДЈАВИ СЕ</a>
						</li>
						
					</ul>
				</div>
			</div>
			<div id="contents">
           	             	  <div style="float:left">
					<p style="font-size:x-large; font:bold; color:#FFF; margin-top:50px; margin-left:200px;">Е-маил</p>
                    <p style="font-size:x-large; font:bold; color:#FFF;  margin-left:200px;">Лозинка</p>
                    <p style="font-size:x-large; font:bold; color:#FFF; margin-top:10px; margin-left:200px;">Потврди лозинка</p>
			</div>
            <div  style="float:left; margin-left:20px">
              <p> <input type = "text" id="emailpromena" class = "fancyinput" placeholder="Внесете емаил" style="; margin-top:50px; margin-left:20px;"/><p>
            <input type = "password" id="lozinkapromena" class = "fancyinput" placeholder="Внесете лозинка" style="  margin-left:20px;"/><p>
            <input type = "password" id="lozinkapromena1" class = "fancyinput" placeholder="Потврди лозинка" style="  margin-left:20px;"/>
            <p>
            <button class = "fancykopce" style="height:50px" onClick="promenilozinka()">Промени</button>
            </div>
            
		</div>

			<p align="center" style="color:#FFF">
				© 2015 All Rights Reserved
			</p>
		</div>
	</div>';
else header('Location: index.php');
	?>
</body>
</html>