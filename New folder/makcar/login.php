<?php
$conn = mysql_connect("localhost","root");
mysql_select_db("avtomobili");
if(mysql_num_rows(mysql_query("SELECT * FROM korisnici WHERE email ='{$_POST['email']}' AND password='".md5($_POST['password'])."';"))==0)
{
	mysql_close($conn);
	header("Location: logiranje.php");
	die();
};
if (session_status() == PHP_SESSION_NONE)
session_start();
$rezultat = mysql_fetch_assoc(mysql_query("SELECT idkorisnici,ime,prezime,ovlastuvanje FROM korisnici WHERE email = '".$_POST['email']."';"));
$_SESSION['logiran']=true;
$_SESSION['logiranid'] = $rezultat['idkorisnici'];
$_SESSION['logiranemail']=$_POST['email'];
$_SESSION['logiranime']= $rezultat['ime']." ".$rezultat['prezime'];
mysql_close($conn);
if($rezultat['ovlastuvanje'] == "admin")
header("Location: adminavtomobili.php");
else
header("Location: index.php");
?>
