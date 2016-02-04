<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Логирај Се</title>
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
			<div id="contents" >
				<div class="box">
					<div>
						<div id="contact" class="body" style="height: 500px;">
						<h3>Ако се немате регистрирано ве молиме <a href="register.php"> регистрирајте се</a></h3>
							<form action="login.php" method="post" class="login">
								<table>
									<tbody>
										<tr>
											<td>Е-МАИЛ:</td>
											<td><input name="email" type="text" value="" class="txtfield"></td>
										</tr> <tr>
											<td>Лозинка:</td>
											<td><input name="password" type="password" value="" class="txtfield"></td>
										</tr>  <tr>
											<td></td>
											<td><input type="submit" value="Логирај се" class="fancykopce" style="width:150px; height:30px;"></td>
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