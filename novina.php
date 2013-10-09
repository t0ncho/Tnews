<!DOCTYPE html>
<html>
<head>
	<title>БИЗНЕС</title>
	<link rel="stylesheet" href="main.css" />
	<link rel="stylesheet" href="news.css" />
	<link rel="stylesheet" href="menu.css" />
	<link rel="stylesheet" href="premier.css" />
	<link rel="stylesheet" href="mainG.css" />
	<link rel="stylesheet" href="novina.css" />
	<link rel="stylesheet" href="money.css" />
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
	

	

	<div id="ContBody"></div>
	<img src="src/logo.png" alt="" id="logo" onclick="window.location.href='Main.php'">
	<div id="vhod">
		<ul>
			<li><a href='logIn.php'><span>Вход</span></a></li>
			<li>|</li>
			<li><a href='reg.php'><span>Регистрация</span></a></li>
		</ul>
	</div>


	<img src="src/focus.png" alt="" id="weather" >

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
				<li><a href='categories.php?cat_id=<?=$rowT['id']?>'><span><?php echo $rowT["name"]; ?></span></a></li>
		<?php }?>

	</ul>
	</div>

	<!-- ----------------------------------------------------------------------------- -->


	<div id="focusWeather">
		<div id="weather1">
			<img class="item-thumb" src="src/weather/sunny.png" alt="">
			<h4 class="weather-text" >София <br>13 &deg; | 21 &deg; <br>Вероятност за дъжд - 5%</h4>
		</div>
		<div id="weather2">
			<img class="item-thumb" src="src/weather/cloudy.png" alt="">
			<h4 class="weather-text">Пловдив<br>13 &deg; | 20 &deg;<br> Вероятност за дъжд - 17% </h4>
		</div>
		<div id="weather3">
			<img class="item-thumb" src="src/weather/rain.png" alt="">
			<h4 class="weather-text">Бургас<br>11 &deg; | 18 &deg;<br>Вероятност за дъжд - 52%</h4>
		</div>
	</div>

	<!-- ----------------------------------------------------------------------------- -->
	<div id="reclama"> 
		<img src="src/ad/reclama.jpg" alt="" id="reclama1">
	</div>

	<!-- ----------------------------------------------------------------------------- -->

<form method="get" action="search.php" id="search">
  		<input name="query" type="text" size="40" placeholder="Търсене..." />
	</form>
	

<!--------------------------------------------------------------------------------- -->
	<div id="Money">
		<div id="titleMoney">Валутни курсове</div>

		<div id="EUR">
			<img src="src/money/EUR.png">
			<h3 class="value">1.955830 лв.</h3>
		</div>
		<div id="GBP">
			<img src="src/money/GBP.png">
			<h3 class="value">2.271840 лв.</h3>
		</div>
		<div id="USD">
			<img src="src/money/USD.png">
			<h3 class="value">1.493800 лв.</h3>
		</div>
		<div id="JPY">
			<img src="src/money/JPY.png">
			<h3 class="value">1.49129 лв.</h3>
		</div>
		<div id="RON">
			<img src="src/money/RON.png">
			<h3 class="value">0.439937 лв.</h3>
		</div>
		<div id="CHF">
			<img src="src/money/CHF.png">
			<h3 class="value">1.58495 лв.</h3>
		</div>
	</div>

<!--------------------------------------------------------------------------------- -->

<div id="premierBG">
<div id="galleryTitle">
	<h1>Премиера</h1>
</div>	

<?php  
			mysql_connect("localhost", "root","") or die(mysql_error());
			mysql_select_db("tnews") or die(mysql_error());

			$rowsPerPage = 1;

			$query = "SELECT * FROM premieres ORDER BY ID DESC LIMIT  $rowsPerPage";
			$result = mysql_query($query) or die(mysql_error()."[".$query."]");
		?>

<table width="100%" id="Ptable">
<?php while ($row = mysql_fetch_array($result))
{
?>
	
	
<th  align="left" colspan="100%" id="Ptitle" ><?php echo $row['TITLE']; ?></th>

	<tr>
		<td align="left" colspan="100%" id="Pgenre" ><?php echo $row['GENRE']; ?></td>
	</tr>

	<tr>
		<td  align="left" width="150">
			<img id="Pimg" src="<?php echo $row["IMG"]; ?>" height="120" width="120">
		</td>

		<td  align="left"  >
			<p class="test">	<?php echo $row['TEXT']; ?> </td> </p>
		</td>

		</tr>
			<tr >
				<td colspan="100%" id="Bline"><hr/> </td>
			</tr>
		<?php
		}
		?>
		</table>
</div>

<!------------------------------------------------------------------------------------------------- -->
<div id="contextBGB" style="height:1700px;">
<?php 

	mysql_connect("localhost", "root","") or die(mysql_error());
	mysql_select_db("tnews2") or die(mysql_error());

	$id1=(int) $_GET['id'];
	$cat_id=(int) $_GET['cat_id'];
	//var_dump($cat_id);
	$query = "SELECT id, name, date, text, img,cat_id  FROM news WHERE id='$id1' AND cat_id='$cat_id' ORDER BY ID DESC LIMIT 1";
	$result = mysql_query($query) or die(mysql_error()."[".$query."]");


	while ($row = mysql_fetch_array($result)){
		if($id1 == $row['id']){
			
		?>	
		<h2 id="title"><?php	echo $row['name']; ?> </h2>
		<img id="Npic" src="<?php echo $row["img"];?>" height="120" width="120">
		<h4 id="date" >Публикувано на: <?php echo $row['date'];?></h4>
		<h6 id="Ntext"><?php echo $row['text'];?> </h6>

		<?php
		
		}
	}




?>
	


</div>

<!------------------------------------------------------------------------------------------------- -->
	
<!------------------------------------------------------------------------------------------------- -->

<footer>

<a href="https://www.facebook.com/TaraSoft?fref=ts"><img src="src/FL.png" alt="" id="fbLogo"></a>
<a href="https://www.facebook.com/TaraSoft?fref=ts"><img src="src/TL.png" alt="" id="tLogo"></a>

<h3> Тарасофт 2013 - Разработен от Антон Митков Всички права са запазени&copy;</h3>

</footer>

<div id="no"></div>

</body>
</html>