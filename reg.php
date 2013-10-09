<!DOCTYPE html>
<html>
<head>
	<title>Регистрация</title>
	<link rel="stylesheet" href="main.css" />
	<link rel="stylesheet" href="menu.css" />
	<link rel="stylesheet" href="reg.css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<meta charset="UTF-8">

	 <link rel="shortcut icon" href="src/logo/logo.ico" >
	

    <link rel="stylesheet" href="bjqs.css">
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>

    <script src="js/bjqs-1.3.min.js"></script>
    <script src="js/jquery.slides.min.js"></script>

</head>
<body>
	

	

	<div id="ContBody" style="	height: 1200px"></div>
	<img src="src/logo.png" alt="" id="logo" onclick="window.location.href='Main.php'">
	<div id="vhod">
		<ul>
			<li><a href='logIn.php'><span>Вход</span></a></li>
			<li>|</li>
			<li><a href='reg.php'><span>Регистрация</span></a></li>
		</ul>
	</div>



	<div id='cssmenu'>
	<ul>
	   <li><a href='Main.php'><span>Начало</span></a></li>
	   <li><a href='signs.php'><span>Зодии</span></a></li>
	   
	   <?php
	  	 	mysql_connect("localhost", "root","") or die(mysql_error());
			mysql_select_db("tnews2") or die(mysql_error());
  			mysql_query("set names 'utf8'");  



			$queryT = "SELECT id,name,path FROM categories  WHERE id>1 ORDER BY ID  LIMIT 8";
			$resultT = mysql_query($queryT) or die(mysql_error()."[".$queryT."]");
		?>

		<?php while($rowT = mysql_fetch_array($resultT)){?>
				<li><a href='categories.php?cat_id=<?=$rowT['id']?>.php'><span><?php echo $rowT["name"]; ?></span></a></li>
		<?php }?>

	</ul>
	</div>

<!------------------------------------------------------------------------- -->	

	<div id="reg">
		<h1>Регистрация</h1>

		<div id="registration">
			<form action="register.php" method="post">
				<h3>Име:</h3><input type="text" size="20" maxlength="12" name="Name"><br/>
				<h3>Фамилия:</h3><input type="text" size="20" maxlength="12" name="lname"><br/>
				<h3>Потребителско име:</h3><input type="text" size="20" maxlength="12" name="nick"><br/>
				<h3>E-mail:</h3><input type="text" size="20" maxlength="12" name="mail"><br/>
				<h3>Парола:</h3><input type="password" size="20" maxlength="10" name="Pass1"><br/><br>
				<h3>Потвърди паролата:</h3><input type="password" size="20" maxlength="10" name="Pass2"><br/><br><br><br><br><br>


				<input type="checkbox" name="agree" value="yes" id="checked" checked> 
				Съгласен съм с 
				<a href="usloviq.html" id="usloviq"> Условията за ползване </a><br><br>

				<input type="submit" class="classname" value="Регистрация">
			</form>
		</div>
	

	</div>


<!------------------------------------------------------------------------- -->	

<footer>

<a href="https://www.facebook.com/TaraSoft?fref=ts"><img src="src/FL.png" alt="" id="fbLogo"  style="top:1215px"></a>
<a href="https://www.facebook.com/TaraSoft?fref=ts"><img src="src/TL.png" alt="" id="tLogo"   style="top:1215px"></a>

<h3 style="top:1205px"> Тарасофт 2013 - Разработен от Антон Митков Всички права са запазени&copy;</h3>

</footer>

<div id="no" style="top:1215px"></div>

</body>
</html>