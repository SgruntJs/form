<?php
	$servername='localhost';
	$username='root';
	$password='1234';
	$dbname = "tutorial_database";
	$conn=mysqli_connect($servername,$username,$password,"$dbname");
	  if(!$conn){
		  die('Could not Connect MySql Server:' .mysql_error());
		}
?>