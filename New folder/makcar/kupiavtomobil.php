<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Автомобили</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<script src="javascript/kupiavtomobil.js"></script>
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
						<li class="selected">
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
    if(isset($_SESSION['logiranemail']))
		echo   '<li>
				<a href="profil.php">ПРОФИЛ</a></li>
	<li>
				<a href="odjavise.php">ОДЈАВИ СЕ</a></li>';
		else echo '<li><a href="logiranje.php">ЛОГИРАЈ СЕ</a></li>'
				
	?>
					</ul>
				</div>
			</div>
			<div id="contents">
				<div class="box">
					<div>
						<div class="body">
							<ul id="odberiavtomobil">
                            
  
             
                            
<?php  
$conn = mysql_connect("localhost","root");
mysql_select_db("avtomobili");

$rezultat = mysql_query("SELECT * FROM vozila WHERE imekola = '".$_GET['imekola']."';");
echo '<li>';
while($red = mysql_fetch_assoc($rezultat))
	echo '<h2 style="font-size: 250%";>'.$red['proizvoditel'].' '.$red['imekola'].'</h2><img src="'.$red['lokacijaslika'].'" width="100%" height="450"></img><p style="font-size:20px;">'.$red['opis'].'</p>';
	
$rezultat = mysql_query("SELECT * FROM vozila,model WHERE imekola = kola AND imekola = '".$_GET['imekola']."';");
echo '<form action="kupuvanjesokarticka.php" method="POST" >';
$x = 0;
while($red = mysql_fetch_assoc($rezultat)){
	echo '<label style=" font-size:25px;"><input type="radio" onChange="azurirajcena(this);" style="width:1.5em; height:1.5em" name="model" value="'.$red['kola'].' '.$red['zafatninanamotor'].' '.$red['tipnamotor'].' '.$red['konjskisili'].' '.$red['menuvac'].' '.$red['cena'].'">'.$red['kola'].' '.$red['zafatninanamotor'].' '.$red['tipnamotor'].' '.$red['konjskisili'].'hp '.$red['menuvac'].' - '.$red['cena'].' €</input></label><br>';
	
	
	}
	echo '<div style="width:50%; float:left;"><h3>Дополнителна опрема</h3>';
	$echostring = ' <select id="stakla" name="stakla" class="odberidopolnitelnaoprema" onChange="azurirajcena(this);">
		<option value="neodbrano">Стакла</option>';
	  $query= mysql_query("SELECT * FROM stakla");
	  while($red1=mysql_fetch_assoc($query)){
	 	$echostring.= '<option value="'.$red1['stakla'].' '.$red1['cena'].'"'.'>'.$red1['stakla'].' '.$red1['cena'].' €'.'</option>';
		}
$echostring.= '</select>';
echo $echostring;

	$echostring = ' <br><br><select id="sedista" name="sedista" class="odberidopolnitelnaoprema" onChange="azurirajcena(this);">
		<option value="neodbrano">Седишта</option>';
	  $query= mysql_query("SELECT * FROM sedista");
	  while($red1=mysql_fetch_assoc($query)){
	 	$echostring.= '<option value="'.$red1['sedista'].' '.$red1['cena'].'"'.'>'.$red1['sedista'].' '.$red1['cena'].' €'.'</option>';
		}
$echostring.= '</select>';
echo $echostring;

	$echostring = ' <br><br><select id="boja" name="boja" class="odberidopolnitelnaoprema" onChange="azurirajcena(this);">
		<option value="neodbrano">Боја</option>';
	  $query= mysql_query("SELECT * FROM boja");
	  while($red1=mysql_fetch_assoc($query)){
	 	$echostring.= '<option value="'.$red1['boja'].' '.$red1['cena'].'"'.'>'.$red1['boja'].' '.$red1['cena'].' €'.'</option>';
		}
$echostring.= '</select>';
echo $echostring;
	$echostring = '<br><br><select id="trkala" name="trkala" class="odberidopolnitelnaoprema" onChange="azurirajcena(this);">
		<option value="neodbrano" style="">Тркала</option>';
	  $query= mysql_query("SELECT * FROM trkala");
	  while($red1=mysql_fetch_assoc($query)){
	 	$echostring.= '<option value="'.$red1['pnevmatik'].' '.$red1['alufelnagolemina'].' '.$red1['cena'].'"'.'>'.$red1['pnevmatik'].' '.$red1['alufelnagolemina'].' '.$red1['cena'].' €'.'</option>';
		}
$echostring.= '</select>';
echo $echostring;
	$echostring = '<br><br><select id="svetla" name="svetla" class="odberidopolnitelnaoprema" onChange="azurirajcena(this);">
		<option value="neodbrano" style="">Светла</option>';
	  $query= mysql_query("SELECT * FROM svetla");
	  while($red1=mysql_fetch_assoc($query)){
	 	$echostring.= '<option value="'.$red1['svetla'].' '.$red1['cena'].'"'.'>'.$red1['svetla'].' '.$red1['cena'].' €'.'</option>';
		}
$echostring.= '</select></div>';
echo $echostring;
echo '<div style="width:50%; float:right;"><br><br><p style="font-size:22px;font-weight: bold;">Сензори</p>';
$rezultat = mysql_query("SELECT * FROM senzori;");
$x= 0;
while($red = mysql_fetch_assoc($rezultat)){
	echo '<label style=" font-size:25px;"><input type="checkbox" style="width:1.5em; height:1.5em" name="senzor'.$x++.'" onChange="azurirajcena(this);" value="'.$red['senzori'].' '.$red['cena'].'">'.$red['senzori'].' '.$red['cena'].' €</input></label><br>';
	
	
	}

	echo '</div>';
	echo '<input id="momentalnacena" name="momentalnacena" type="text" style="border:none; background:transparent; position:relative;top:30px; font-size:30px;" value="Цена: 0 €"/>
	<input type="submit" class="fancykopce" value="Купи" style="float:right; position:relative; top:70px; width:170px; height:50px; font-size:20px"/>';
	echo '</form>';   




mysql_close($conn);
        ?>   
                          
							</ul>
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
						<li class="active">
							<a href="odberiavtomobil.php?proizvoditel=site">АВТОМОБИЛИ</a>
						</li>
						<li  >
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