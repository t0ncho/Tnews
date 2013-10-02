<?php
	mysql_connect("localhost", "root","") or die(mysql_error());
	mysql_select_db("tnews2") or die(mysql_error());
if (isset($_POST['submit'])){

if(!empty($_POST['title']) && !empty($_POST['txt']) && !empty($_POST['image'])){
	$TITLE=$_POST['title'];
	$DATE=date('d.m.Y');
	$TXT=$_POST['txt'];
	$IMAGE=$_POST['image'];
	$CATEGORIES=$_POST['categories'];

	$ANSWER=$_POST['check'];


	//var_dump($_POST);
	$MAINPAGE=0;
		if($ANSWER == "mainY"){
			$MAINPAGE=1;
		}
}	
	$cat="SELECT name,id,path FROM categories ORDER BY ID";
	$result_cat = mysql_query($cat) or die(mysql_error()."[".$cat."]");
	
	
	while ($row_cat = mysql_fetch_array($result_cat)){
 	if($CATEGORIES == $row_cat['path']){
 				$cat_id = $row_cat['id'];
 				mysql_query("INSERT INTO news(`name`,`date`,`text`,`img`,`cat_id`,`main_page`,`cat_path`) VALUES('$TITLE','$DATE','$TXT','$IMAGE','$cat_id','$MAINPAGE','$CATEGORIES')")or die(mysql_error());  

 	} 
 }
	
}

?>

<?php
	header("Location: Ad_bussiness.php");
?>
