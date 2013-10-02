<?php
	mysql_connect("localhost", "root","") or die(mysql_error());
	mysql_select_db("tnews") or die(mysql_error());

if(!empty($_POST['title']) && !empty($_POST['name']) && !empty($_POST['city']) && !empty($_POST['image'])){
	$title=$_POST['title'];
	$name=$_POST['name'];
	$city=$_POST['city'];
	$image=$_POST['image'];
	
	mysql_query("INSERT INTO photo(`TITLE`,`NAME`,`CITY`,`IMG`) VALUES('$title','$name','$city','$image')")or die(mysql_error());
}


?>
<?php
	header("Location: Ad_photo.html");
?>