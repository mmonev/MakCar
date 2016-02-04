<?php
header('Content-Type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
echo '<response>';
if (session_status() == PHP_SESSION_NONE)
session_start();
if(isset($_SESSION['logiranemail']))
echo '<dalielogiran>ok</dalielogiran>';
else echo '<dalielogiran>ne</dalielogiran>';

$conn = mysql_connect("localhost","root");
mysql_select_db("avtomobili");

$querystring = "SELECT proizvoditel,imekola,tipnavozilo,lokacijaslika FROM vozila";
if($_GET['proizvoditel']!='Производител'  || $_GET['tipnavozilo']!='Каросерија'   || $_GET['barajtext']!='')
$querystring.= " WHERE ";

if($_GET['proizvoditel']!='Производител')
$querystring.= "proizvoditel = '".$_GET['proizvoditel']."' AND ";

if($_GET['tipnavozilo']!='Каросерија')
$querystring.= "tipnavozilo = '".$_GET['tipnavozilo']."' AND ";

if($_GET['barajtext']!='')
$querystring.= "imekola LIKE '".$_GET['barajtext']."%'";
if(substr($querystring, strlen($querystring)-4)=="AND ")
	$querystring =  substr_replace($querystring," ORDER BY proizvoditel;", -4, 22);
$rezultat = mysql_query($querystring);
while($red = mysql_fetch_assoc($rezultat)){
		echo "<avtomobil>";
		echo "<proizvoditel>".$red['proizvoditel']."</proizvoditel>";
		echo "<imekola>".$red['imekola']."</imekola>";
		echo "<tipnavozilo>".$red['tipnavozilo']."</tipnavozilo>";
		echo "<lokacijaslika>".$red['lokacijaslika']."</lokacijaslika>";
		echo "</avtomobil>";
	}
echo '<rezultat>'.$querystring.'</rezultat>';
echo '</response>';
mysql_close($conn);
?>