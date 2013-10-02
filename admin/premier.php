<?php
	mysql_connect("localhost", "root","") or die(mysql_error());
	mysql_select_db("tnews") or die(mysql_error());

if(!empty($_POST['title']) && !empty($_POST['genre']) && !empty($_POST['txt']) && !empty($_POST['image'])){
	$title=$_POST['title'];
	$genre=$_POST['genre'];
	$txt=$_POST['txt'];
	$image=$_POST['image'];
	
	mysql_query("INSERT INTO premieres(`TITLE`,`GENRE`,`TEXT`,`IMG`) VALUES('$title','$genre','$txt','$image')")or die(mysql_error());
}


?>
<?php
	header("Location: Ad_premier.html");
?>