<?php
header('Content-Type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';

$conn = mysql_connect("localhost","root");
mysql_select_db("avtomobili");
echo '<response>';
$povikuvac = $_GET['povikuvac'];
if($povikuvac == "dodadiavtomobil"){
	mysql_query("INSERT INTO vozila VALUES('".$_GET['imekola']."','".$_GET['lokacijaslika']."','".$_GET['proizvoditel']."','".$_GET['tipnavozilo']."','".$_GET['opis']."');");

if(mysql_query("INSERT INTO model VALUES('".$_GET['tipnamotor']."','".$_GET['zafatninanamotor']."','".$_GET['menuvac']."','".$_GET['imekola']."','".$_GET['konjskisili']."','".$_GET['cena']."');"))
echo '<rezultat>Внесено во базата</rezultat>';
else echo '<rezultat>Не е внесено во базата</rezultat>';
}
else if($povikuvac == "izbrisiavtomobil"){
	if(mysql_query("DELETE FROM model WHERE tipnamotor = '".$_GET['tipnamotor']."' AND zafatninanamotor = '".$_GET['zafatninanamotor']."' AND menuvac = '".$_GET['menuvac']."' AND kola = '".$_GET['imekola']."' AND konjskisili = '".$_GET['konjskisili']."' AND cena = '".$_GET['cena']."';"))
	echo '<rezultat>Избришано од базата</rezultat>';
	else echo '<rezultat>Неуспешно бришење од базата</rezultat>';
	
	
	}
else if($povikuvac == "dodadioprema"){
	$vnes1 = $_GET['vnes1'];
	$vnes2 = $_GET['vnes2'];
	$tabela = $_GET['tabela'];
	$cena = $_GET['cena'];
	if($vnes2!="prazno"){
		if(mysql_query("INSERT INTO trkala VALUES('".$vnes1."','".$vnes2."','".$cena."');"))
			echo '<rezultat>Внесено во базата</rezultat>';
		else echo '<rezultat>Не е внесено во базата</rezultat>';
	}
	else {
		if(mysql_query("INSERT INTO ".$tabela." VALUES('".$vnes1."','".$cena."');"))
			echo '<rezultat>Внесено во базата</rezultat>';
		else echo '<rezultat>Не е внесено во базата</rezultat>';
		}
}
else if($povikuvac == "izbrisioprema"){
	$tipoprema = $_GET['tipoprema'];
	$imeoprema = $_GET['imeoprema'];
	$alufelnagolemina = $_GET['alufelnagolemina'];
	$cena = $_GET['cena'];
	
		mysql_query("SET SQL_SAFE_UPDATES = 0;");
	if($alufelnagolemina!="prazno"){
		if(mysql_query("DELETE FROM trkala WHERE pnevmatik = '".$imeoprema."' AND alufelnagolemina = '".$alufelnagolemina."';"))
			echo '<rezultat>Избришано од базата</rezultat>';
		else echo '<rezultat>Не е избришано од базата</rezultat>';
	}
	else {
		if(mysql_query("DELETE FROM ".$tipoprema." WHERE ".$tipoprema."='".$imeoprema."';"))
			echo '<rezultat>Избришано од базата</rezultat>';
		else echo '<rezultat>Не е избришано од базата</rezultat>';
		}
		mysql_query("SET SQL_SAFE_UPDATES = 1;");
}
else {

	mysql_query("SET SQL_SAFE_UPDATES = 0;");
	if(mysql_fetch_assoc(mysql_query("SELECT * FROM korisnici WHERE email = '".$_GET['email']."';"))>0){
	if(mysql_query("UPDATE korisnici SET password = '".md5($_GET['password'])."' WHERE email = '".$_GET['email']."';"))		      echo '<rezultat>Лозинката е променета</rezultat>';
	
	mysql_query("SET SQL_SAFE_UPDATES = 1;");
	}
else echo '<rezultat>Не постои дадениот емаил</rezultat>';
}
echo '</response>';
mysql_close($conn);
?>