<?php
	mysql_connect("localhost", "root","") or die(mysql_error());
	mysql_select_db("tnews") or die(mysql_error());

if(!empty($_POST['ime']) && !empty($_POST['password'])){
	$Ime=$_POST['ime'];
	$Password=$_POST['password'];
}

$data = mysql_query("SELECT * FROM registration") or die(mysql_error());

  $info = mysql_fetch_array( $data ); 

if($info['nickname']==$Ime && $info['pass1']==$Password){

	header("Location: admin/Ad_bussiness.php");
}else{
	echo "Wrong password or nickname";
}
 ?>

