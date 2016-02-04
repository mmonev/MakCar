<?php
header('Content-Type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
echo '<response>';



$conn = mysql_connect("localhost","root");
mysql_select_db("avtomobili");
$odbrano = $_GET['odbrano'];
if($odbrano == "dodadiavtomobil"){
$rezultat = mysql_query("SELECT tipnavozilo FROM tipnavozilo");
if($rezultat){
	while($red = mysql_fetch_assoc($rezultat)){
	echo "<tipnavozilo>".$red['tipnavozilo']."</tipnavozilo>";	
	}
}
$rezultat = mysql_query("SELECT tipnamotor FROM tipnamotor");
if($rezultat){
	while($red = mysql_fetch_assoc($rezultat)){
	echo "<tipnamotor>".$red['tipnamotor']."</tipnamotor>";	
	}
}
$rezultat = mysql_query("SELECT menuvac FROM menuvac");
if($rezultat){
	while($red = mysql_fetch_assoc($rezultat)){
	echo "<menuvac>".$red['menuvac']."</menuvac>";	
	}
}
$rezultat = mysql_query("SELECT zafatninanamotor FROM zafatninanamotor");
if($rezultat){
	while($red = mysql_fetch_assoc($rezultat)){
	echo "<zafatninanamotor>".$red['zafatninanamotor']."</zafatninanamotor>";	
	}
}
$rezultat = mysql_query("SELECT ime FROM proizvoditel");
if($rezultat){
	while($red = mysql_fetch_assoc($rezultat)){
	echo "<proizvoditel>".$red['ime']."</proizvoditel>";	
	}
}
}
else if($odbrano=="izbrisiavtomobil"){
	$rezultat = mysql_query("SELECT * FROM model,vozila WHERE imekola = kola ORDER BY proizvoditel");
	if($rezultat){
		while($red = mysql_fetch_assoc($rezultat)){
		echo "<avtomobil>";
		echo "<proizvoditel>".$red['proizvoditel']."</proizvoditel>";
		echo "<imekola>".$red['imekola']."</imekola>";
		echo "<zafatninanamotor>".$red['zafatninanamotor']."</zafatninanamotor>";
		echo "<tipnamotor>".$red['tipnamotor']."</tipnamotor>";
		echo "<konjskisili>".$red['konjskisili']."</konjskisili>";
		echo "<tipnavozilo>".$red['tipnavozilo']."</tipnavozilo>";
		echo "<menuvac>".$red['menuvac']."</menuvac>";
		echo "<cena>".$red['cena']."</cena>";
		
			
		
		echo "</avtomobil>";
	}
}
	}
else if($odbrano=="izbrisioprema"){
	$rezultat = mysql_query("SELECT * FROM boja");
	if($rezultat){
		while($red = mysql_fetch_assoc($rezultat)){
		echo "<oprema>";
		echo "<tipoprema>Boja</tipoprema>";
		echo "<tipoprema>Боја</tipoprema>";
		echo "<imeoprema>".$red['boja']."</imeoprema>";
		echo "<cena>".$red['cena']."</cena>";
		echo "</oprema>";
	}
	
}
$rezultat = mysql_query("SELECT * FROM stakla");
	if($rezultat){
		while($red = mysql_fetch_assoc($rezultat)){
		echo "<oprema>";
		echo "<tipoprema>Stakla</tipoprema>";
		echo "<tipoprema>Стакла</tipoprema>";
		echo "<imeoprema>".$red['stakla']."</imeoprema>";
		echo "<cena>".$red['cena']."</cena>";
		echo "</oprema>";
	}
	
}
$rezultat = mysql_query("SELECT * FROM senzori");
	if($rezultat){
		while($red = mysql_fetch_assoc($rezultat)){
		echo "<oprema>";
		echo "<tipoprema>Senzori</tipoprema>";
		echo "<tipoprema>Сензори</tipoprema>";
		echo "<imeoprema>".$red['senzori']."</imeoprema>";
		echo "<cena>".$red['cena']."</cena>";
		echo "</oprema>";
	}
	
}
$rezultat = mysql_query("SELECT * FROM sedista");
	if($rezultat){
		while($red = mysql_fetch_assoc($rezultat)){
		echo "<oprema>";
		echo "<tipoprema>Sedista</tipoprema>";
		echo "<tipoprema>Седишта</tipoprema>";
		echo "<imeoprema>".$red['sedista']."</imeoprema>";
		echo "<cena>".$red['cena']."</cena>";
		echo "</oprema>";
	}
	
}
$rezultat = mysql_query("SELECT * FROM svetla");
	if($rezultat){
		while($red = mysql_fetch_assoc($rezultat)){
		echo "<oprema>";
		echo "<tipoprema>Svetla</tipoprema>";
		echo "<tipoprema>Светла</tipoprema>";
		echo "<imeoprema>".$red['svetla']."</imeoprema>";
		echo "<cena>".$red['cena']."</cena>";
		echo "</oprema>";
	}
	
}

$rezultat = mysql_query("SELECT * FROM trkala");
	if($rezultat){
		while($red = mysql_fetch_assoc($rezultat)){
		echo "<oprema>";
		echo "<tipoprema>Trkala</tipoprema>";
		echo "<tipoprema>Тркала</tipoprema>";
		echo "<imeoprema>".$red['pnevmatik']."</imeoprema>";
		echo "<alufelnagolemina>".$red['alufelnagolemina']."</alufelnagolemina>";
		echo "<cena>".$red['cena']."</cena>";
		echo "</oprema>";
	}
	
}
	}
else if($odbrano=="prodadenikoli"){
	
$rezultat = mysql_query("SELECT ime,prezime,proizvoditel,imekola,tipnamotor,zafatninanamotor,konjskisili,menuvac,tipnavozilo FROM kupeniavtomobili,
korisnici,vozila WHERE korisnici.idkorisnici = kupeniavtomobili.idkorisnici AND kola = imekola");
	if($rezultat){
		while($red = mysql_fetch_assoc($rezultat)){
		echo "<avtomobil>";
		echo "<ime>".$red['ime']."</ime>";
		echo "<prezime>".$red['prezime']."</prezime>";
		echo "<proizvoditel>".$red['proizvoditel']."</proizvoditel>";
		echo "<imekola>".$red['imekola']."</imekola>";
		echo "<zafatninanamotor>".$red['zafatninanamotor']."</zafatninanamotor>";
		echo "<tipnamotor>".$red['tipnamotor']."</tipnamotor>";
		echo "<konjskisili>".$red['konjskisili']."hp</konjskisili>";
		echo "<tipnavozilo>".$red['tipnavozilo']."</tipnavozilo>";
		echo "<menuvac>".$red['menuvac']."</menuvac>";
		echo "</avtomobil>";
	}
	
}
	}
echo '</response>';
mysql_close($conn);
?>