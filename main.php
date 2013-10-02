<!DOCTYPE html>
<html>
<head>
	<title>Начало</title>
	<link rel="stylesheet" href="main.css" />
	<link rel="stylesheet" href="menu.css" />
	<link rel="stylesheet" href="NewsOTD.css" />
	<link rel="stylesheet" href="smallAds.css" />
	<link rel="stylesheet" href="premier.css" />
	<link rel="stylesheet" href="mainG.css" />
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
	

	
	<div id="footer1"></div>

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
	   <li><a href='signs.php'><span>Зодии</span></a></li>

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

	<form method="get" action="search.php" id="search">
  		<input name="query" type="text" size="40" placeholder="Търсене..." />
	</form>

	<!-- ----------------------------------------------------------------------------- -->
	<div id="reclama"> 
		<img src="src/ad/reclama.jpg" alt="" id="reclama1">
	</div>

	<!-- ----------------------------------------------------------------------------- -->

 <div id="newsOftheDay"></div>
	<div id="focus_title">Водещите новини днес.</div>

    <div id="slider">
	      <div id="banner-slide">

	      	<?php  
			mysql_connect("localhost", "root","") or die(mysql_error());
			mysql_select_db("tnews2") or die(mysql_error());

			
			?>
			<?php
				$queryT = "SELECT id,name,img,cat_id,main_page FROM news WHERE main_page = 1 ORDER BY ID DESC LIMIT  0,3";
				    $resultT = mysql_query($queryT) or die(mysql_error()."[".$queryT."]");?>
				<ul class="bjqs">
				  <?php while ($rowT = mysql_fetch_array($resultT, MYSQL_BOTH)){?>
			<li><img src="<?php echo $rowT["img"]; ?>" title="<?php echo $rowT["name"]; ?>"        class="siderNews"></li>
				    <?php
				    }
				    ?>
			?>
	      </div>      
	     <div>
	      <!-- attach the plug-in to the slider parent element and adjust the settings as required -->
	      <script class="secret-source">
	        jQuery(document).ready(function($) {
	          
	          $('#banner-slide').bjqs({
	            animtype      : 'slide',
	            height        : 320,
	            width         : 620,
	            responsive    : true,
	            randomstart   : true
	          });     
	        });
	      </script>
	    </div>
    </div>

</div>
	<!-- ----------------------------------------------------------------------------- -->

	<div id="focusBussines" >
		<a class="titleMini" href="bussiness.php">Бизнес</a>

		<?php  
			mysql_connect("localhost", "root","") or die(mysql_error());
			mysql_select_db("tnews2") or die(mysql_error());

			$rowsPerPage = 2;

			$query = "SELECT id,name,text,img,cat_id FROM news WHERE cat_id=2 ORDER BY ID DESC LIMIT  $rowsPerPage";
			$result = mysql_query($query) or die(mysql_error()."[".$query."]");
		?>

		<table id="table" width="100%">
			<?php while ($row = mysql_fetch_array($result)){
				
				if($row['cat_id'] == 2){
			?>
	
				<tr>
					<td  align="left" width="150" >
						<img class="pic" src="<?php echo $row["img"];?>" height="120" width="120">
					</td>
				<td  align="left" colspan="100%" id="title" ><a id="Zaglavie" href="novina.php?id=<?= $row['id'] ?>&cat_id=<?=$row['cat_id']?>" >  <?php echo $row['name'];  ?></a></td>

				</tr>
					<tr >
						<td colspan="100%"><hr/> </td>
					</tr>
					<?php
					
					}
					}
					?>
			</table>
					

	</div>
<!-- ----------------------------------------------------------------------------- -->
	<div id="focusCrimi" >
		<a class="titleMini" href="krimi.php">Крими</a>

		<?php  
			mysql_connect("localhost", "root","") or die(mysql_error());
			mysql_select_db("tnews2") or die(mysql_error());

			$rowsPerPage = 2;

			$query = "SELECT id,name,text,img,cat_id FROM news WHERE cat_id=3 ORDER BY ID DESC LIMIT  $rowsPerPage";
			$result = mysql_query($query) or die(mysql_error()."[".$query."]");
		?>

		<table id="table" width="100%">
			<?php while ($row = mysql_fetch_array($result)){
				
				if($row['cat_id'] == 3){
			?>
	
				<tr>
					<td  align="left" width="150" >
						<img class="pic" src="<?php echo $row["img"];?>" height="120" width="120">
					</td>
				<td  align="left" colspan="100%" id="title" ><a id="Zaglavie" href="novina.php?id=<?= $row['id'] ?>&cat_id=<?=$row['cat_id']?>" >  <?php echo $row['name'];  ?></a></td>

				</tr>
					<tr >
						<td colspan="100%"><hr/> </td>
					</tr>
					<?php
					
					}
					}
					?>
			</table>
	</div>
<!-- ----------------------------------------------------------------------------- -->
	<div id="focusSport" >
		<a class="titleMini" href="sport.php">Спорт</a>

		<?php  
			mysql_connect("localhost", "root","") or die(mysql_error());
			mysql_select_db("tnews2") or die(mysql_error());

			$rowsPerPage = 2;

			$query = "SELECT id,name,text,img,cat_id FROM news WHERE cat_id=4 ORDER BY ID DESC LIMIT  $rowsPerPage";
			$result = mysql_query($query) or die(mysql_error()."[".$query."]");
		?>

		<table id="table" width="100%">
			<?php while ($row = mysql_fetch_array($result)){
				
				if($row['cat_id'] == 4){
			?>
	
				<tr>
					<td  align="left" width="150" >
						<img class="pic" src="<?php echo $row["img"];?>" height="120" width="120">
					</td>
				<td  align="left" colspan="100%" id="title" ><a id="Zaglavie" href="novina.php?id=<?= $row['id'] ?>&cat_id=<?=$row['cat_id']?>" >  <?php echo $row['name'];  ?></a></td>

				</tr>
					<tr >
						<td colspan="100%"><hr/> </td>
					</tr>
					<?php
					
					}
					}
					?>
			</table>	
	</div>
<!-- ----------------------------------------------------------------------------- -->
	<div id="focusHealth" >
		<a class="titleMini" href="health.php">Здраве</a>

		<?php  
			mysql_connect("localhost", "root","") or die(mysql_error());
			mysql_select_db("tnews2") or die(mysql_error());

			$rowsPerPage = 2;

			$query = "SELECT id,name,text,img,cat_id FROM news WHERE cat_id=5 ORDER BY ID DESC LIMIT  $rowsPerPage";
			$result = mysql_query($query) or die(mysql_error()."[".$query."]");
		?>

		<table id="table" width="100%">
			<?php while ($row = mysql_fetch_array($result)){
				
				if($row['cat_id'] == 5){
			?>
	
				<tr>
					<td  align="left" width="150" >
						<img class="pic" src="<?php echo $row["img"];?>" height="120" width="120">
					</td>
				<td  align="left" colspan="100%" id="title" ><a id="Zaglavie" href="novina.php?id=<?= $row['id'] ?>&cat_id=<?=$row['cat_id']?>" >  <?php echo $row['name'];  ?></a></td>

				</tr>
					<tr >
						<td colspan="100%"><hr/> </td>
					</tr>
					<?php
					
					}
					}
					?>
			</table>	
	</div>
<!-- ----------------------------------------------------------------------------- -->
	<div id="focusTechnology" >
		<a class="titleMini" href="techno.php">Технологии</a>

		<?php  
			mysql_connect("localhost", "root","") or die(mysql_error());
			mysql_select_db("tnews2") or die(mysql_error());

			$rowsPerPage = 2;

			$query = "SELECT id,name,text,img,cat_id FROM news WHERE cat_id=6 ORDER BY ID DESC LIMIT  $rowsPerPage";
			$result = mysql_query($query) or die(mysql_error()."[".$query."]");
		?>

		<table id="table" width="100%">
			<?php while ($row = mysql_fetch_array($result)){
				
				if($row['cat_id'] == 6){
			?>
	
				<tr>
					<td  align="left" width="150" >
						<img class="pic" src="<?php echo $row["img"];?>" height="120" width="120">
					</td>
				<td  align="left" colspan="100%" id="title" ><a id="Zaglavie" href="novina.php?id=<?= $row['id'] ?>&cat_id=<?=$row['cat_id']?>" >  <?php echo $row['name'];  ?></a></td>

				</tr>
					<tr >
						<td colspan="100%"><hr/> </td>
					</tr>
					<?php
					
					}
					}
					?>
			</table>
	</div>
	<!-- ----------------------------------------------------------------------------- -->
	<div id="focusTV" >
		<a class="titleMini" href="lifes.php">Лайфстайл</a>

		<?php  
			mysql_connect("localhost", "root","") or die(mysql_error());
			mysql_select_db("tnews2") or die(mysql_error());

			$rowsPerPage = 2;

			$query = "SELECT id,name,text,img,cat_id FROM news WHERE cat_id=7 ORDER BY ID DESC LIMIT  $rowsPerPage";
			$result = mysql_query($query) or die(mysql_error()."[".$query."]");
		?>

		<table id="table" width="100%">
			<?php while ($row = mysql_fetch_array($result)){
				
				if($row['cat_id'] == 7){
			?>
	
				<tr>
					<td  align="left" width="150" >
						<img class="pic" src="<?php echo $row["img"];?>" height="120" width="120">
					</td>
				<td  align="left" colspan="100%" id="title" ><a id="Zaglavie" href="novina.php?id=<?= $row['id'] ?>&cat_id=<?=$row['cat_id']?>" >  <?php echo $row['name'];  ?></a></td>

				</tr>
					<tr >
						<td colspan="100%"><hr/> </td>
					</tr>
					<?php
					
					}
					}
					?>
			</table>
	</div>



<!--------------------------------------------------------------------------------- -->
	<div id="Money" style="top:900px;">

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

<div id="premierBG" style="top:1300px">

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

<a href="https://www.facebook.com/TaraSoft?fref=ts"><img src="src/FL.png" alt="" id="fbLogo"></a>
<a href="https://www.facebook.com/TaraSoft?fref=ts"><img src="src/TL.png" alt="" id="tLogo"></a>

<h3> Тарасофт 2013 - Разработен от Антон Митков Всички права са запазени&copy;</h3>

</footer>

<div id="no"></div>

</body>
</html>