<?php
	$a=$_POST["n"];
	$b=$_POST["e"];
	$c=$_POST["d"];
	$d=$_POST["t"];
	$e=$_POST["no"];
	$con=mysql_connect("localhost","root","");
	mysql_select_db("seatsbooked");
	mysql_query("insert into class(n,e,d,t,no) values('$a','$b','$c','$d','$e')");
	echo("You have successfully booked your seat!");
	include("BookSeat.html");
	mysql_close($con);
?>
