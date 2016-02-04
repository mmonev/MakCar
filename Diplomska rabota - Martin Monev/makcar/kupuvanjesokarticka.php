<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Купи</title>
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
                        <li>
							<a href="profil.php">ПРОФИЛ</a>
						</li>
                        <li>
							<a href="odjavise.php">ОДЈАВИ СЕ</a>
						</li>
					</ul>
				</div>
			</div>
			<div id="contents">
				<div class="box">
					<div>
						<div id="contact" class="body" style="height: 500px;">
							<h1>Купи</h1>
								<table align="center">
									<tbody>

                                    <tr>
                 <?php 
				 if (session_status() == PHP_SESSION_NONE)
						session_start();
						
				$model = explode(" ",$_POST['model']);
				 $model[3] = str_replace("hp","",$model[3]);				
				
				
				 $stakla = explode(" ",$_POST['stakla']);
				 $sedista = explode(" ",$_POST['sedista']);
				 $boja = explode(" ",$_POST['boja']);
				 $trkala = $_POST['trkala'];
				 $svetla = explode(" ",$_POST['svetla']);
				 $senzori;
				 for($i=0;;$i++){
					if(isset($_POST['senzor'.$i])){
						$senzori[$i] = explode(" ",$_POST['senzor'.$i]);
						echo '<input type="text" class="kupenavtomobil" hidden="true" id="senzor'.$i.'" value="'.$senzori[$i][0].'" name="senzor'.$i.'" />';
						}
					else break; 
					 }
				$cena = explode(" ",$_POST['momentalnacena']);
				echo '<input type="text" hidden="true" class="kupenavtomobil" id="cena" value="'.$cena[1].'" name="cena"/>';
				
				
				echo '<input type="text" hidden="true" class="kupenavtomobil" id="idkorisnik" value="'. $_SESSION['logiranid'].'" name="idkorisnik"/>';
				echo '<input type="text" hidden="true" class="kupenavtomobil" id="tipnamotor" value="'.$model[2].'" 
				name="tipnamotor"/>';
				echo '<input type="text" hidden="true" class="kupenavtomobil" id="zafatninanamotor" value="'.$model[1].'" name="zafatninanamotor"/>';
				echo '<input type="text" hidden="true" class="kupenavtomobil" id="menuvac" value="'.$model[4].'" name="menuvac"/>';
				echo '<input type="text" hidden="true" class="kupenavtomobil" id="kola" value="'.$model[0].'" 
				name="kola"/>';
				echo '<input type="text" hidden="true" class="kupenavtomobil" id="konjskisili" value="'.$model[3].'" name="konjskisili"/>';
				echo '<input type="text" hidden="true" class="kupenavtomobil" id="stakla" value="'.$stakla[0].'" name"stakla" />';
				echo '<input type="text" hidden="true" class="kupenavtomobil" id="sedista" value="'.$sedista[0].'" name="sedista" />';
				echo '<input type="text" hidden="true" class="kupenavtomobil" id="svetla" value="'.$svetla[0].'" name="svetla" />';
	
				echo '<input type="text" hidden="true" class="kupenavtomobil" id="trkala" value="'.$trkala.'" name="trkala"/>';
				echo '<input type="text" hidden="true" class="kupenavtomobil" id="boja" value="'.$boja[0].'" name="boja"/>';
				
				
				
					?>
                                    </tr>

	
                                   		 <tr>
											<td>Број на картичка:</td>
											<td><input id="brojnakarticka" type="text" onkeypress="return event.charCode >= 48 && event.charCode <= 57" class="txtfield" value="" maxlength="16"></td>
                                            <td id="brojnakartickainfo" style="color:#F00; font-size:20px"></td>
										</tr> 
										<tr>
											<td>Име:</td>
											<td><input id="ime" type="text" value="" class="txtfield"></td>
                                            <td id="imeinfo" style="color:#F00; font-size:20px"></td>
										</tr> 										<tr>
											<td>Презиме:</td>
											<td><input id="prezime" type="text" value="" class="txtfield"></td>
                                            <td id="prezimeinfo" style="color:#F00; font-size:20px"></td>
										</tr>
                                                <tr>
											<td>Тип на картичка:</td>
											<td><select id="tipnakarticka" class="odberitipnakarticka"><?php 
											$conn = mysql_connect("localhost","root");
											mysql_select_db("avtomobili");
											$query = mysql_query("SELECT ime FROM tipnakarticka");
											while($red = mysql_fetch_assoc($query)){
												echo '<option value="'.$red['ime'].'">'.$red['ime'].'</option>';
												}
											mysql_close($conn);?></select></td>
										</tr>                              
                                        <tr>
											<td>Дата на истекување:</td>
											<td><select id="mesecistekuvanje" class="odberitipnakarticka" style="width:58px">
                                            	<option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>
                                    <select id="godinaistekuvanje" class="odberitipnakarticka" style="width:150px">
                                            	<option value="2015">2015</option>
                                                <option value="2016">2016</option>
                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                            </select></td>
                                            <td id="" style="color:#F00; font-size:20px"></td>
										</tr>
                                        <tr>
											<td>CVV2/CVC2:</td>
											<td><input id="cvv2cvc2" type="text" value="" class="txtfield" maxlength="3" onkeypress="return event.charCode >= 48 && event.charCode <= 57"></td>
                                            <td id="cvv2cvc2info" style="color:#F00; font-size:20px"></td>
										</tr>
                               			  


                                         <tr>
											<td></td>
											<td><input type="submit" value="Купи" class="fancykopce" onClick="kupisokarticka();"></td>
										</tr>
									</tbody>
								</table>
                            
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
						<li>
							<a href="zanas.php">ЗА НАС</a>
						</li>

						<li>
							<a href="kontakt.php">КОНТАКТ</a>
						</li>
                  		<li>
							<a href="profil.php">ПРОФИЛ</a>
						</li>
                        <li>
							<a href="odjavise.php">ОДЈАВИ СЕ</a>
						</li>
				</ul>
				
			</div>
			<p align="center" style="color:#FFF">
				© 2015 All Rights Reserved
			</p>
		</div>
	</div>
</body>
</html>