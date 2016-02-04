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
echo'<div id="pozadina">
		<div id="predendel">
			<div id="header">
				<div id="logo">
					<a href="index.php"><img src="sliki/logo.png" alt="LOGO" height="120" width="300"></a>
				</div>
				<div id="glavnomeni">
					<ul>
						<li style="width:286px" class="selected">
							<a href="adminavtomobili.php">АВТОМОБИЛИ</a>
						</li>
						<li style="width:286px">
							<a href="adminpromenanalozinka.php">ПРОМЕНА НА ЛОЗИНКА</a>
						</li>
						<li style="width:286px">
							<a href="odjavise.php">ОДЈАВИ СЕ</a>
						</li>
						
					</ul>
				</div>
			</div>
			<div id="contents" >
           	  <div style="float:left">
					<button  id="dodadiavtomobil" class="adminkopce" onClick="adminavtomobili1(this.id);">Додади автомобил</button></p>
                    <button  id="izbrisiavtomobil" class="adminkopce" onClick="adminavtomobili1(this.id);">Избриши автомобил</button></p>
                    <button  id="dodadioprema" class="adminkopce" onClick="adminavtomobili1(this.id);">Додади опрема</button></p>
                    <button  id="izbrisioprema" class="adminkopce" onClick="adminavtomobili1(this.id);">Избриши опрема</button>
                    </p><button  id="prodadeniavtomobili" class="adminkopce" onClick="adminavtomobili1(this.id);">Листа на продадени автомобили</button>
			</div>
            <div id="avtomobilisodrzina" style="float:left; margin-left:20px">
            </div>
		</div>

			<p align="center" style="color:#FFF">
				© 2015 All Rights Reserved
			</p>
		</div>
	</div>';
else header("Location: index.php");
	?>
</body>
</html>