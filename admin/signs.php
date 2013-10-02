<?php

	mysql_connect("localhost", "root","") or die(mysql_error());
	mysql_select_db("tnews") or die(mysql_error());

if(!empty($_POST['oven']) && !empty($_POST['telec']) && !empty($_POST['bliznaci']) && !empty($_POST['rak']) && !empty($_POST['luv']) && !empty($_POST['deva']) && !empty($_POST['vezni'])
	 && !empty($_POST['skorpion']) && !empty($_POST['strelec']) && !empty($_POST['kozirog']) && !empty($_POST['vodolei']) && !empty($_POST['ribi'])){
	$oven=$_POST['oven'];
	$telec=$_POST['telec'];
	$bliznaci=$_POST['bliznaci'];
	$rak=$_POST['rak'];
	$luv=$_POST['luv'];
	$deva=$_POST['deva'];
	$vezni=$_POST['vezni'];
	$skorpion=$_POST['skorpion'];
	$strelec=$_POST['strelec'];
	$kozirog=$_POST['kozirog'];
	$vodolei=$_POST['vodolei'];
	$ribi=$_POST['ribi'];
	
	
	mysql_query("INSERT INTO signs(`OVEN`,`TELEC`,`BLIZNACI`,`RAK`,`LUV`,`DEVA`,`VEZNI`,`SKORPION`,`STRELEC`,`KOZIROG`,`VODOLEI`,`RIBI`) 
		VALUES('$oven','$telec','$bliznaci','$rak','$luv','$deva','$vezni','$skorpion','$strelec','$kozirog','$vodolei','$ribi')")or die(mysql_error());
	
}

?>

<?php
	header("Location: Ad_signs.html");
?>