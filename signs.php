<!DOCTYPE html>
<html>
<head>
	<title>Зодии</title>
	<link rel="stylesheet" href="main.css" />
	<link rel="stylesheet" href="menu.css" />
	<link rel="stylesheet" href="premier.css" />
	<link rel="stylesheet" href="mainG.css" />
	<link rel="stylesheet" href="zodii.css" />
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
	

	

	<div id="ContBody" style="height:2500px;"></div>
	<img src="src/logo.png" alt="" id="logo" onclick="window.location.href='main.php'">
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
	   <li><a href='main.php'><span>Начало</span></a></li>
	   <li><a href='signs.php'><span>Зодии</span></a></li>
	   
	   <?php
	  	 	mysql_connect("localhost", "root","") or die(mysql_error());
			mysql_select_db("tnews2") or die(mysql_error());
  			mysql_query("set names 'utf8'");  



			$queryT = "SELECT id,name FROM categories  WHERE id>1 ORDER BY ID  LIMIT 8";
			$resultT = mysql_query($queryT) or die(mysql_error()."[".$queryT."]");
		?>

		<?php while($rowT = mysql_fetch_array($resultT)){?>
				<li><a href='categories.php?id=<?= $rowT['path'] ?>&cat_id=<?=$rowT['id']?>.php'><span><?php echo $rowT["name"]; ?></span></a></li>
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
	<div id="Money" style="top:700px;">

		<?php  
			mysql_connect("localhost", "root","") or die(mysql_error());
			mysql_select_db("tnews") or die(mysql_error());


			$query = "SELECT * FROM money ORDER BY ID DESC LIMIT 1";
			$result = mysql_query($query) or die(mysql_error()."[".$query."]");
		?>

	<?php while ($row = mysql_fetch_array($result))
	{
	?>
		<div id="galleryTitle">
		<h1 style="font-size:20px;">Валутни курсове</h1></div>

		<div id="EUR">
			<img src="src/money/EUR.png">
			<h3 class="value"><?php echo $row["EURO"]; ?> лв.</h3>
		</div>
		<div id="GBP">
			<img src="src/money/GBP.png">
			<h3 class="value"><?php echo $row["BRITAIN"]; ?> лв. </h3>
		</div>
		<div id="USD">
			<img src="src/money/USD.png">
			<h3 class="value"><?php echo $row["USA"]; ?> лв.</h3>
		</div>
		<div id="JPY">
			<img src="src/money/JPY.png">
			<h3 class="value"><?php echo $row["CHINA"]; ?> лв.</h3>
		</div>
		<div id="RON">
			<img src="src/money/RON.png">
			<h3 class="value"><?php echo $row["RUMA"]; ?> лв.</h3>
		</div>
		<div id="CHF">
			<img src="src/money/CHF.png">
			<h3 class="value"><?php echo $row["SHVED"]; ?> лв.</h3>
		</div>
	<?php 
	}
	?>
	</div>

<!--------------------------------------------------------------------------------- -->

<div id="premierBG" style="top:1200px">

<div id="galleryTitle">
	<h1>Премиера</h1>
</div>	

<?php  
			mysql_connect("localhost", "root","") or die(mysql_error());
			mysql_select_db("tnews") or die(mysql_error());


			$query = "SELECT * FROM premieres ORDER BY ID DESC LIMIT  1";
			$result = mysql_query($query) or die(mysql_error()."[".$query."]");
		?>

<table width="100%" id="Ptable">
<?php while ($row = mysql_fetch_array($result))
{
?>
	
	
<th  align="left" colspan="100%" id="Ptitle" ><?php echo $row['TITLE']; ?></th>

	<tr >
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
<!-- ----------------------------------------------------------------------------- -->
<div id="Context">
	<h1>Хороскоп</h1>

	<?php  
			mysql_connect("localhost", "root","") or die(mysql_error());
			mysql_select_db("tnews") or die(mysql_error());


			$query = "SELECT * FROM signs ORDER BY ID DESC LIMIT  1";
			$result = mysql_query($query) or die(mysql_error()."[".$query."]");
	?>

	<?php while ($row = mysql_fetch_array($result))
			{
			?>
	
	<div id="oven">
		<img id="Oimg" style="width:100px;" src="src/signs/oven.jpg">
		<h6 style="position:absolute; top:-30px; left:120px;"><?php echo $row["OVEN"]; ?></h6>
	</div>

	<div id="telec">
		<img id="Timg" style="width:100px;"  src="src/signs/telec.jpg">
		<h6 style="position:absolute; top:-30px; left:120px;"><?php echo $row["TELEC"]; ?></h6>
	</div>

	<div id="bliznaci">
		<img id="Timg" style="width:100px;"  src="src/signs/bliznaci.jpg">
		<h6 style="position:absolute; top:-30px; left:120px;"><?php echo $row["BLIZNACI"]; ?></h6>
	</div>

	<div id="rak">
		<img id="Rimg"  style="width:100px;" src="src/signs/rak.jpg">
		<h6 style="position:absolute; top:-30px; left:120px;"><?php echo $row["RAK"]; ?></h6>
	</div>

	<div id="luv">
		<img id="Limg" style="width:100px;"  src="src/signs/luv.jpg">
		<h6 style="position:absolute; top:-30px; left:120px;"><?php echo $row["LUV"]; ?></h6>
	</div>

	<div id="deva">
		<img id="Dimg" style="width:100px;"  src="src/signs/deva.jpg">
		<h6 style="position:absolute; top:-30px; left:120px;"><?php echo $row["DEVA"]; ?></h6>
	</div>


	<div id="vezni">
		<img id="Vimg" style="width:100px;"  src="src/signs/vezni.jpg">
		<h6 style="position:absolute; top:-30px; left:120px;"><?php echo $row["VEZNI"]; ?></h6>
	</div>

	<div id="skorpion">
		<img id="Skimg" style="width:100px;"  src="src/signs/skorpion.jpg">
		<h6 style="position:absolute; top:-30px; left:120px;"><?php echo $row["SKORPION"]; ?></h6>
	</div>

	<div id="strelec">
		<img id="Simg" style="width:100px;"  src="src/signs/strelec.jpg">
		<h6 style="position:absolute; top:-30px; left:120px;"><?php echo $row["STRELEC"]; ?></h6>
	</div>

	<div id="kozirog">
		<img id="Kimg" style="width:100px;"  src="src/signs/kozirog.jpg">
		<h6 style="position:absolute; top:-30px; left:120px;"><?php echo $row["KOZIROG"]; ?></h6>
	</div>

	<div id="vodolei">
		<img id="Vimg" style="width:100px;"  src="src/signs/vodolei.jpg">
		<h6 style="position:absolute; top:-30px; left:120px;"><?php echo $row["VODOLEI"]; ?></h6>
	</div>

	<div id="ribi">
		<img id="Rimg" style="width:100px;"  src="src/signs/ribi.jpg">
		<h6 style="position:absolute; top:-30px; left:120px;"><?php echo $row["RIBI"]; ?></h6>
	</div>

<?php
}
?>

</div>

<!-- ----------------------------------------------------------------------------- -->


<div id="galleryBG">
<div id="galleryTitle">
<h1> Снимки на деня</h1>	
</div>
<?php
	mysql_connect("localhost", "root","") or die(mysql_error());
	mysql_select_db("tnews") or die(mysql_error());


	$query = "SELECT * FROM photo ORDER BY ID DESC LIMIT  0,4";
	$result = mysql_query($query) or die(mysql_error()."[".$query."]");
?>

</div>
<div id="gallery">
<div class="container">
    <div id="slides">
    <?php while ($row = mysql_fetch_array($result, MYSQL_BOTH)){?>
      <img src="<?php echo $row["IMG"]; ?>" title="<?php echo $row["TITLE"]; echo"-"; echo $row["NAME"]; echo"-"; echo $row["CITY"]; ?>" alt="">
      <a href="#" class="slidesjs-previous slidesjs-navigation"><i class="icon-chevron-left icon-large"></i></a>
      <a href="#" class="slidesjs-next slidesjs-navigation"><i class="icon-chevron-right icon-large"></i></a>
      <?php
		}
		?>
    </div>
  </div>

  
  <script>
    $(function() {
      $('#slides').slidesjs({
        width: 940,
        height: 528,
        navigation: false
      });
    });
  </script>
  
</div>

<!-- ----------------------------------------------------------------------------- -->

<footer>

<a href="https://www.facebook.com/TaraSoft?fref=ts"><img src="src/FL.png" alt="" id="fbLogo" style="top:2515px"></a>
<a href="https://www.facebook.com/TaraSoft?fref=ts"><img src="src/TL.png" alt="" id="tLogo" style="top:2515px"></a>

<h3 style="top:2515px"> Тарасофт 2013 - Разработен от Антон Митков Всички права са запазени&copy;</h3>

</footer>

<div id="no" style="top:2515px"></div>

</body>
</html>