<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Автомобили</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<script src="javascript/barajavtomobil.js"></script>
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
							<ul id="odberiavtomobil">
                            
  
             
                            
<?php  
$conn = mysql_connect("localhost","root");
mysql_select_db("avtomobili");
$proizvoditel;
if(isset($_POST['proizvoditel']))
$proizvoditel = $_POST['proizvoditel'];
else $proizvoditel = "site";
$rezultat;
if($proizvoditel=="site")
$rezultat = mysql_query("SELECT lokacijaslika,proizvoditel,tipnavozilo,imekola FROM vozila;");  
else
$rezultat = mysql_query("SELECT lokacijaslika,proizvoditel,tipnavozilo,imekola FROM vozila
WHERE proizvoditel='".$proizvoditel."';");
	$echostring = '  <li id="baranjedel" style="height:100px">
    <select id="odberiproizvoditel" class="odberiproizvoditel" style="border-top:50px">
		<option id="optionsite"';
	if($proizvoditel == "site")
      $echostring.='selected';
	  $echostring.='>Производител</option>';
	  $proizvoditel1 = mysql_query("SELECT ime FROM proizvoditel");
	  while($red1=mysql_fetch_assoc($proizvoditel1)){
	 	$echostring.= '<option id="option'.$red1['ime'].'"';
		if($proizvoditel == $red1['ime'])
		$echostring.= 'selected';
		$echostring.='>'.$red1['ime'].'</option>';
		
		}
$echostring.= '</select>';
echo $echostring;

$echostring = ' <select id="odberikaroserija" class="odberikaroserija">
		<option id="optionsite" style="">Каросерија</option>';
	  $query= mysql_query("SELECT tipnavozilo FROM tipnavozilo");
	  while($red1=mysql_fetch_assoc($query)){
	 	$echostring.= '<option id="option'.$red1['tipnavozilo'].'"'.'>'.$red1['tipnavozilo'].'</option>';
		}
$echostring.= '</select>';
echo $echostring;


$echostring = '<input id="barajtext" type="text" class="barajtext" placeholder="Име на автомобил">
    </input>
	
    <button id="barajkopce" class="barajkopce" onClick="barajavtomobil();">
    	БАРАЈ
    </button></li>';
	
echo $echostring;
if(mysql_num_rows($rezultat)>0){
	while($red = mysql_fetch_assoc($rezultat)){ 
	echo '<li class="liavtomobil">
								<img src="'.$red['lokacijaslika'].'" width="270" height="180"></img>
								
									<h2>'.$red['proizvoditel'].' '.$red['imekola'].' '.'</h2>
									
									<h3>Каросерија:'.$red['tipnavozilo'].'</h3>'.
									
    									'
										<form action="kupiavtomobil.php" method="get">
								<input  name="imekola" type = "text" hidden = "true" value ="'.$red['imekola'].'"/>'; 
if (session_status() == PHP_SESSION_NONE)
session_start();
if(isset($_SESSION['logiranemail']))										
	echo	'<input type="submit" value = "Купи" id="'.$red['imekola'].'" class="fancykopce" style="width:130px;height:40px;"></input>';
else echo '<input type="button" value = "Купи" id="'.$red['imekola'].'" class="fancykopce" style="width:130px;height:40px;" onClick="prenasocuvanje();"></input>';	
	 echo '</form>
			</li>';
			
	}
}
else echo '<p>МОМЕНТАЛНО НЕМА НИТУ ЕДЕН АВТОМОБИЛ</p>';
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