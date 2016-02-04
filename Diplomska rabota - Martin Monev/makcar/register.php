<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Регистрирај се</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
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
						<li>
							<a href="odberiavtomobil.php?proizvoditel=site">АВТОМОБИЛИ</a>
						</li>
						<li>
							<a href="zanas.php">ЗА НАС</a>
						</li>

						<li>
							<a href="kontakt.php">КОНТАКТ</a>
						</li>
                        <li class="selected">
							<a href="logiranje.php">ЛОГИРАЈ СЕ</a>
						</li>
					</ul>
				</div>
			</div>
			<div id="contents">
				<div class="box">
					<div>
						<div id="contact" class="body" style="height: 700px;">
							<h1>Регистрирај Се</h1>
							<form action="registersubmit.php" method="post" class="register" style="height:500px">
								<table>
									<tbody>
										<tr>
											<td>Име:</td>
											<td><input name="ime" type="text" value="" class="txtfield"></td>
										</tr> 										<tr>
											<td>Презиме:</td>
											<td><input name="prezime" type="text" value="" class="txtfield"></td>
										</tr>
                                        <tr>
											<td>E-МАИЛ:</td>
											<td><input name="email" type="text" value="" class="txtfield"></td>
										</tr>                                      
                                        <tr>
											<td>Дата на раѓање:</td>
											<td><input name="datanaragjanje" type="text" value="" class="txtfield" placeholder="Година-Месец-Ден"></td>
										</tr> <tr>
											<td>Улица:</td>
											<td><input name="ulica" type="text" value="" class="txtfield"></td>
										</tr>
                                        <tr>
											<td>Број на улица:</td>
											<td><input name="brojulica" type="text" value="" class="txtfield"></td>
										</tr>
                               			                                        <tr>
											<td>Општина:</td>
											<td><input name="opstina" type="text" value="" class="txtfield"></td>
										</tr>
                                                                                						<tr>
											<td>Држава:</td>
											<td><input name="drzava" type="text" value="" class="txtfield"></td>
										</tr>
                                                                                						<tr>
											<td>Телефон:</td>
											<td><input name="telefon" type="text" value="" class="txtfield"></td>
										</tr>
                                                                               						 <tr>
											<td>Лозинка:</td>
											<td><input name="password" type="password" value="" class="txtfield"></td>
										</tr>


                                         <tr>
											<td></td>
											<td><input type="submit" value="Регистрирај се" class="fancykopce" style="width:170px;height:30px"></td>
										</tr>
									</tbody>
								</table>
							</form>
                            
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
						<li>
							<a href="odberiavtomobil.php?proizvoditel=site">АВТОМОБИЛИ</a>
						</li>
						<li>
							<a href="zanas.php">ЗА НАС</a>
						</li>

						<li>
							<a href="kontakt.php">КОНТАКТ</a>
						</li>
                  		<li>
							<a href="kosnicka.php">КОШНИЧКА</a>
						</li>
                        <li  class="active">
							<a href="logiranje.php">ЛОГИРАЈ СЕ</a>
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