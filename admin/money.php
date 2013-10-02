<?php
	mysql_connect("localhost", "root","") or die(mysql_error());
	mysql_select_db("tnews") or die(mysql_error());

if(!empty($_POST['EU']) && !empty($_POST['UK']) && !empty($_POST['USA']) && !empty($_POST['CHIN'])  && !empty($_POST['RUM'])  && !empty($_POST['SHED'])){
	$EU=$_POST['EU'];
	$UK=$_POST['UK'];
	$USA=$_POST['USA'];
	$CHIN=$_POST['CHIN'];
	$RUM=$_POST['RUM'];
	$SHED=$_POST['SHED'];
	
	mysql_query("INSERT INTO money(`EURO`,`BRITAIN`,`USA`,`CHINA`,`RUMA`,`SHVED`) VALUES('$EU','$UK','$USA','$CHIN','$RUM','$SHED')")or die(mysql_error());

}

?>

<?php
	header("Location: Ad_money.html");
?>
