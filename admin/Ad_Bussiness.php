<?php
	mysql_connect("localhost", "root","") or die(mysql_error());
	mysql_select_db("tnews2") or die(mysql_error());
	mysql_query("set names 'utf8'");  
	
	$query = "SELECT name,id,path FROM categories ORDER BY ID  LIMIT  0,7";
	$result = mysql_query($query) or die(mysql_error()."[".$query."]");
?>

<!DOCTYPE html>
<html>
<head>
	<title>News administration</title>
	<link rel="stylesheet" href="admin.css" />
	<link rel="stylesheet" href="menu.css" />
	<link rel="stylesheet" href="add_news.css" />


	<meta charset="UTF-8">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

</head>
<body>

<div id="left">
	<img src="src/logo.png" alt="" id="logo" >

	<h1>Admin menu.</h1>

	<div id='cssmenu'>
		<ul>
		   
		   <li><a href='Ad_Bussiness.php'><span>НОВИНА</span></a></li>
		    <li><a href='Ad_signs.html'><span>ЗОДИИ</span></a></li>
		   <li><a href='Ad_photo.html'><span>ФОТО</span></a></li>
		   <li><a href='Ad_premier.html'><span>ПРЕМИЕРА</span></a></li>
		   <li><a href='Ad_money.html'><span>ВАЛУТНИ КУРСОВЕ</span></a></li>
		</ul>
	</div>
	<div style="clear:both; margin: 0 0 0px 0;">&nbsp;</div>


<!---------------------------------------------------------------------------- -->

	
	
		

		<div id="news">
		<h1 style="width:900px;">ДОБАВЯНЕ НА НОВИНА</h1>
			<form action="bussiness.php" method="post">
				<h3>Заглавие:</h3><textarea maxlength="50" name="title" id="title"  rows="3" cols="30"></textarea><br/><br/>
				
				<h3 id="txt_t">Текст:</h3><textarea name="txt" id="txt" rows="32" cols="80"></textarea><br/><br>
				<h3 id="txt_i">Снимка:</h3><textarea name="image" id="img" rows="1" cols="30"></textarea><br/><br>
				
				<h3>Категория:</h3>
				<select name="categories">
				<?php while ($row = mysql_fetch_array($result))
					{
				?>
					<option value="<?php echo $row['path']; ?>"><?php  echo $row['name']?></option>
						 
				<?php
				}
				?>		  
				</select>
				
				<h3><input type="radio" name="check" value="mainY">Да зареди в главното меню<br><br></h3>
				<input type="submit" class="classname" value="Запиши" name="submit">
				
			</form>
		</div>
				

<!---------------------------------------------------------------------------- -->



</div>

</body>
</html>