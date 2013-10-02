<?php
	mysql_connect("localhost", "root","") or die(mysql_error());
	mysql_select_db("tnews") or die(mysql_error());

if(!empty($_POST['Name']) && !empty($_POST['lname']) && !empty($_POST['nick']) && !empty($_POST['mail']) 
	&& !empty($_POST['Pass1']) && !empty($_POST['Pass2'])){
	$Name=$_POST['Name'];
	$lname=$_POST['lname'];
	$nick=$_POST['nick'];
	$mail=$_POST['mail'];
	$Pass1=$_POST['Pass1'];
	$Pass2=$_POST['Pass2'];


	$answer = $_POST['agree'];
	if ($answer == "yes"){
	mysql_query("INSERT INTO registration(`name_`,`last_name`,`nickname`,`e-mail`,`pass1`,`pass2`) VALUES('$Name','$lname','$nick','$mail','$Pass1','$Pass2')")or die(mysql_error());
}	
	
	$result = mysql_query("SELECT * FROM registration") or die(mysql_error()); 
	

	echo "
	<table border='1'>
	<tr> 
	<th>
		<form action='?o=name'	 method='POST'>
			<input type='submit' name='model' value='name'>
		</form>
	</th>  
	<th>
		<form  action='?o=lname' method='POST'>
			<input type='submit' name='quantity' value='last name'>
		</form>
	</th> 
	<th>
		<form  action='?o=nick' method='POST'>
			<input type='submit' name='city' value='nickname'>
		</form>
	</th> 

	<th>
		<form  action='?o=mail' method='POST'>
			<input type='submit' name='name' value='e-mail'>
		</form>
	</th> 

	<th>
		<form  action='?o=pass1' method='POST'>
			<input type='submit' name='number' value='pass1'>
		</form>
	</th> 

	<th>
		<form  action='?o=pass2' method='POST'>
			<input type='submit' name='number' value='pass2'>
		</form>
	</th> 

	<th>
		<form  action='?o=sex' method='POST'>
			<input type='submit' name='number' value='sex'>
		</form>
	</th> 

	</tr>";
}
	
	while($row = mysql_fetch_array( $result )) {
		echo "<tr><td>"; 
		echo $row['0'];
		echo "</td><td>"; 
		echo $row['1'];
		echo "</td><td>"; 
		echo $row['2'];
		echo "</td><td>"; 
		echo $row['3'];
		echo "</td><td>";
		echo $row['4'];
		echo "</td><td>";
		echo $row['5'];
		echo "</td><td>";
		echo $row['6'];
		echo "</td></tr>";
	} 

	echo "</table>";

?>
