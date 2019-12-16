<?php

if(isset($_SESSION['login']) and ($_SESSION['login'] == 'admin'))
{
	$servername="localhost";  
	$username="root";  
	$password="";
	$dbname="mysite"; 
	$conn  =  mysqli_connect($servername,  $username,  $password,$dbname);
mysqli_query($conn, "DELETE * FROM users where login = " .$_POST('login'). ""); }else{header("Location:login.html");};
?>
