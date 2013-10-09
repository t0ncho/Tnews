<!DOCTYPE html>
<html>
<head>
	<title>Вход</title>
	<link rel="stylesheet" href="main.css" />
	<link rel="stylesheet" href="menu.css" />
	<link rel="stylesheet" href="logIn.css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<meta charset="UTF-8">

    <link rel="stylesheet" href="bjqs.css">
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>

	 <link rel="shortcut icon" href="src/logo/logo.ico" >
    

    <script src="js/bjqs-1.3.min.js"></script>
    <script src="js/jquery.slides.min.js"></script>

</head>
<body>
	

	

	<div id="ContBody" style="	height: 1000px"></div>
	<img src="src/logo.png" alt="" id="logo" onclick="window.location.href='Main.php'">
	<div id="vhod">
		<ul>
			<li><a href='#'><span>Вход</span></a></li>
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

	<div id="logIn">
		<h1>Вход</h1>

		<div id="log">
			<form action="log.php" method="post">
				<h3>Потребителско име:</h3><input type="text" size="20" maxlength="12" name="ime"><br/>
				<h3>Парола:</h3><input type="password" size="20" maxlength="10" name="password"><br/><br>

				<input type="submit" class="classname" value="Вход">

			</form>
		</div>
				<a href="#" >Забравена парола</a>
				
				<a href="reg.html"  >Регистрация</a>

	</div>


<!------------------------------------------------------------------------- -->	

<footer>

<a href="https://www.facebook.com/TaraSoft?fref=ts"><img src="src/FL.png" alt="" id="fbLogo"  style="top:1015px"></a>
<a href="https://www.facebook.com/TaraSoft?fref=ts"><img src="src/TL.png" alt="" id="tLogo"   style="top:1015px"></a>

<h3 style="top:1005px"> Тарасофт 2013 - Разработен от Антон Митков Всички права са запазени&copy;</h3>

</footer>

<div id="no" style="top:1015px"></div>

</body>
</html>