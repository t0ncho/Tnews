<!DOCTYPE html>
<html>
<head>
	<title>Снимки</title>
	<link rel="stylesheet" href="main.css" />
	<link rel="stylesheet" href="menu.css" />
	<link rel="stylesheet" href="premier.css" />
	<link rel="stylesheet" href="mainG.css" />
	<link rel="stylesheet" href="money.css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<meta charset="UTF-8">

    <link rel="stylesheet" href="bjqs.css">
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>

    <script src="js/bjqs-1.3.min.js"></script>
    <script src="js/jquery.slides.min.js"></script>

</head>
<body>
	

	

	<div id="ContBody"></div>
	<img src="src/logo.png" alt="" id="logo" onclick="window.location.href='main.php'">
	<div id="vhod">
		<ul>
			<li><a href='logIn.html'><span>Вход</span></a></li>
			<li>|</li>
			<li><a href='reg.html'><span>Регистрация</span></a></li>
		</ul>
	</div>


	<img src="src/focus.png" alt="" id="weather" >

	<div id='cssmenu'>
	<ul>
	    <li><a href='main.php'><span>Начало</span></a></li>
	   <li><a href='bussiness.php'><span>Бизнес</span></a></li>
	   <li><a href='krimi.php'><span>Крими</span></a></li>
	   <li><a href='sport.php'><span>Спорт</span></a></li>
	   <li><a href='health.php'><span>Здраве</span></a></li>
	   <li><a href='techno.php'><span>Технологии</span></a></li>
   	   <li><a href='lifes.php'><span>Лайфстайл</span></a></li>
	   <li><a href='Foto.php'><span>Фото</span></a></li>

	</ul>
	</div>

	<!-- ----------------------------------------------------------------------------- -->


	<div id="focusWeather">
		<div id="weather1">
			<a class="item-thumb" href=""><img src="src/weather/sunny.png" alt=""></a>	
			<a class="weather-text" href="">София <br>13 &deg; | 21 &deg; <br>Вероятност за дъжд - 5%</a>
		</div>
		<div id="weather2">
			<a class="item-thumb" href=""><img src="src/weather/cloudy.png" alt=""></a>
			<a class="weather-text" href="">Пловдив<br>13 &deg; | 20 &deg;<br> Вероятност за дъжд - 17% </a>
		</div>
		<div id="weather3">
			<a class="item-thumb" href=""><img src="src/weather/rain.png" alt=""></a>
			<a class="weather-text" href="">Бургас<br>11 &deg; | 18 &deg;<br>Вероятност за дъжд - 52%</a>
		</div>
	</div>

	<!-- ----------------------------------------------------------------------------- -->
	<div id="reclama"> 
		<img src="src/ad/reclama.jpg" alt="" id="reclama1">
	</div>

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
<?while ($row = mysql_fetch_array($result))
{
?>
	
	
<th  align="left" colspan="100%" id="Ptitle" ><? echo $row['TITLE']; ?></th>

	<tr >
		<td align="left" colspan="100%" id="Pgenre" ><? echo $row['GENRE']; ?></td>
	</tr>

	<tr>
		<td  align="left" width="150">
			<img id="Pimg" src="<?php echo $row["IMG"]; ?>" height="120" width="120">
		</td>

		<td  align="left"  >
			<p class="test">	<? echo $row['TEXT']; ?> </td> </p>
		</td>

		</tr>
			<tr >
				<td colspan="100%" id="Bline"><hr/> </td>
			</tr>
		<?
		}
		?>
		</table>
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
    <? while ($row = mysql_fetch_array($result, MYSQL_BOTH)){?>
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

<a href="https://www.facebook.com/TaraSoft?fref=ts"><img src="src/FL.png" alt="" id="fbLogo"></a>
<a href="https://www.facebook.com/TaraSoft?fref=ts"><img src="src/TL.png" alt="" id="tLogo"></a>

<h3> Тарасофт 2013 - Разработен от Антон Митков Всички права са запазени&copy;</h3>

</footer>

<div id="no"></div>

</body>
</html>