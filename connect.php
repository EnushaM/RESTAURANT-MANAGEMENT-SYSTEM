<?php
	$name=$_POST["name"];
	$email=$_POST["email"];
	$query=$_POST["query"];

	$con=mysql_connect("localhost","root","");
	mysql_select_db("query");
	mysql_query("insert into message(name,email,query) values('$name','$email','$query')");
	echo("Your Query has been sent");
	include("Contactus.php");
	mysql_close($con);
?>