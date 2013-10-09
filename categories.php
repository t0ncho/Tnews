<!DOCTYPE html>
<html>
<head>
	<title>Категория</title>
	<link rel="stylesheet" href="main.css" />
	<link rel="stylesheet" href="news.css" />
	<link rel="stylesheet" href="menu.css" />
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
	

	

	<div id="ContBody" style="	height: 1700px"></div>
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

<!------------------------------------------------------------------------------------------------- -->

<?php
	mysql_connect("localhost", "root","") or die(mysql_error());
	mysql_select_db("tnews2") or die(mysql_error());
	mysql_query("set names 'utf8'");  

	
	$cat_id=(int) $_GET['cat_id'];



	var_dump($cat_id);

	$queryC = "SELECT id, name,path  FROM categories WHERE id=$cat_id  ORDER BY ID DESC LIMIT 1";
	$resultC = mysql_query($queryC) or die(mysql_error()."['.$queryC.']");


?>

<div id="contextBGB" >
  <h1><?php while ($rowC = mysql_fetch_array($resultC)){ ?>
	<?php  	echo $rowC['name']; ?>
	<?php } ?></h1>

	<hr id="Tline" >
	<div id="news">

<?php


$thispage = $_SERVER['PHP_SELF'];

$showeachside = 5; //  Колко страници да се показват отляво и отдясно на текущата страница

// Колко реда на страница
$rowsPerPage = 5;

// Подразбираме показване на първа страница
$pageNum = 1;

// ако $_GET['page'] е дифинирано използваме тази страница
if(isset($_GET['page']))
{
	$pageNum = $_GET['page'];
}

// пресмятаме отместването
$offset = ($pageNum - 1) * $rowsPerPage;

$count_news = 0;

// тук трябва да напишеш своята заявка
	$query = "SELECT cat_id,name,date,text,img,id FROM news WHERE cat_id=$cat_id ORDER BY ID DESC LIMIT $offset, $rowsPerPage";
	
  $result = mysql_query($query) or die(mysql_error()."['.$query.]");
  	mysql_query("set names 'utf8'");  

?>


	<table width="100%"  >
	<?php while ($row = mysql_fetch_array($result))
	{
	?>
		<?php
			$count_news=0; 
			$count_news++;
			
			//var_dump($row['cat_id']);
		 ?>	

	<th  align="left" colspan="100%" id="title" ><a id="Zaglavie" href="novina.php?id=<?= $row['id'] ?>&cat_id=<?=$row['cat_id']?>">  <?php echo $row['name'];  ?></a></th>
					

		<tr >
			<td align="left" colspan="100%" id="date" ><?php  echo $row['date']; ?></td>
		</tr>

		<tr>
			<td  align="left" width="150">
				<img id="img" src="<?php echo $row["img"]; ?>" height="120" width="120">
			</td>

			<td  align="left" id="txt" >
				<table width="450">
					<td>
						<TABLE width=100% cellpadding=0 cellspacing=0 style='table-layout:fixed'>
							<TR>
								<TD style='text-overflow: ellipsis; overflow: hidden; white-space: nowrap;'>
								<?php  echo $row['text']; ?>
								</TD>
							</TR>
						</TABLE>
					</td>
				</table> 
			</td>
		

		

		</tr>
			<tr >
				<td colspan="100%"><hr/> </td>
			</tr>
			
			

	<?php 
	}
	?>
	</table>


<?php 

	$id1=(int) $_GET['cat_id'];
	

$result  = mysql_query("SELECT COUNT(cat_id) AS numrows FROM news WHERE cat_id = $id1") or die('Error, query failed');
$row	 = mysql_fetch_array($result);
mysql_query("set names 'utf8'");  


$num = $row['numrows']; // броя на редовете


$cat_id=(int) $_GET['cat_id'];


$id_Page= $cat_id;

//var_dump($id_Page);

$start = ($pageNum -1) * $rowsPerPage;
if(empty($start))$start=0;  //текуща стартова позиция

$max_pages = ceil($num/$rowsPerPage); //брой на страниците
$cur = ceil($start/$rowsPerPage)+1; //текуща страница
?>

<table border="0" align="center" cellpadding="0" cellspacing="0">
	<tr >


		<td align="center" valign="middle" >
			<table >
				<tr  >
					<td colspan="3" align="center" valign="middle" >
						<?php
						$eitherside = ($showeachside * $rowsPerPage);
						if($start+1 > $eitherside)print (" .... ");
						$pg=1;
						for($y=0;$y<$num;$y+=$rowsPerPage)
						{
							$class=(($y==$start)?"active":"")."page";
							if(($y > ($start - $eitherside)) && ($y < ($start + $eitherside)))
							{
								if ($y <> $start) {
									?>
									&nbsp;<a id="number" class=" <?php print($class);?>" href="<?php print("categories.php?id=$id_Page & cat_id=$cat_id/module=guestbook/guestbook_read&page=".(($y/$rowsPerPage)+1) ); ?>"><?php print($pg);?></a>&nbsp;
									<?php
								} else {
									?>
									&nbsp;<a id="pressedButton" class="<?php print($class);?>"><?php print($pg);?></a>&nbsp;
									<?php
								}
							}
		
							$pg++;
						}
						if(($start+$eitherside)<$num)print (" .... ");
						?>
					</td>

				</tr>
			</table>
		</td>

	</tr>

	<tr>
		<td colspan="3" align="center" valign="middle" >&nbsp;</td>
	</tr>

</table>
</div>


<!-- ----------------------------------------------------------------------------- -->


<footer>

<a href="https://www.facebook.com/TaraSoft?fref=ts"><img src="src/FL.png" alt="" id="fbLogo"  style="top:1415px"></a>
<a href="https://www.facebook.com/TaraSoft?fref=ts"><img src="src/TL.png" alt="" id="tLogo"   style="top:1415px"></a>

<h3 style="top:1405px"> Тарасофт 2013 - Разработен от Антон Митков Всички права са запазени&copy;</h3>

</footer>

<div id="no" style="top:1415px"></div>

</body>
</html>