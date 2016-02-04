<?php
header('Content-Type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
echo '<response>';


$conn = mysql_connect("localhost","root");
mysql_select_db("avtomobili");
if($_GET['povikuvac']=="proverka"){
$rezultat = mysql_query("SELECT * FROM karticka,tipnakarticka WHERE tipnakarticka=idtipnakarticka AND brojnakarticka='".$_GET['brojnakarticka']."' AND karticka.ime='".$_GET['ime']."' AND prezime='".$_GET['prezime']."' AND tipnakarticka.ime = '".$_GET['tipnakarticka']."' AND datanaistekuvanje='".$_GET['godinaistekuvanje']."-".$_GET['mesecistekuvanje']."-01' AND raspolozlivisredstva >='".$_GET['cena']."';");
if(mysql_fetch_assoc($rezultat))
	echo "<rezultat>ok</rezultat>";	
		
else echo "<rezultat>greska</rezultat>";
}
else {
	mysql_query("SET SQL_SAFE_UPDATES = 0;");
	$rezultat = mysql_fetch_assoc(mysql_query("SELECT raspolozlivisredstva FROM karticka WHERE brojnakarticka = '".$_GET['brojnakarticka']."';"));
	$novacena = intval($rezultat['raspolozlivisredstva'])-intval($_GET['cena']);
	
	mysql_query("UPDATE karticka SET raspolozlivisredstva = '".$novacena."' WHERE brojnakarticka = '".$_GET['brojnakarticka']."';");
	mysql_query("SET SQL_SAFE_UPDATES = 1;");
	
	$query = "INSERT INTO kupeniavtomobili(idkorisnici,tipnamotor,zafatninanamotor,menuvac,kola,konjskisili,sedista,stakla,svetla,pnevmatik,alufelnagolemina,boja) VALUES('".$_GET['idkorisnik']."','".$_GET['tipnamotor']."','".$_GET['zafatninanamotor']."','".$_GET['menuvac']."','".$_GET['kola']."','".$_GET['konjskisili']."'";

		if($_GET['sedista'] != "neodbrano")
			$query.=",'".$_GET['sedista']."'";
		else $query.=",NULL"; 
		if($_GET['stakla'] != "neodbrano")
			$query.=",'".$_GET['stakla']."'";
		else $query.=",NULL"; 
		if($_GET['svetla'] != "neodbrano")
			$query.=",'".$_GET['svetla']."'";
		else $query.=",NULL";
		if($_GET['trkala']!="neodbrano"){
			$trkala = explode(" ",$_GET['trkala']);
			$query.=",'".$trkala[0]."','".$trkala[1]."'";
		}
			
		else $query.=",NULL,NULL";
		if($_GET['boja'] != "neodbrano")
			$query.=",'".$_GET['boja']."'";
		else $query.=",NULL";
		
	$query.=");";
	if(mysql_query($query))
			echo '<rezultat>ok</rezultat>';
		else echo '<rezultat>greska</rezultat>';
	
	$rezultat = mysql_fetch_assoc(mysql_query("SELECT  idkupeniavtomobili FROM kupeniavtomobili ORDER BY idkupeniavtomobili DESC LIMIT 1;"));
	
	foreach($_GET as $key => $value){
		if(strpos($key,"senzor")!==false){
			mysql_query("INSERT INTO avtomobilisenzori VALUES('".$rezultat['idkupeniavtomobili']."','".$value."');");
			}
			
		}

		
		
		
		
	
	}
echo '</response>';
mysql_close($conn);
?>