<?php
session_start();
$text = $_POST['text'];
$title = $_POST['title'];
$a=$_SESSION['login'];

if(isset($_SESSION['login']))
{
	$servername="localhost";  
	$username="root";  
	$password="";
	$dbname="mysite"; 
	$conn  =  mysqli_connect($servername,  $username,  $password, $dbname);
	mysqli_set_charset($conn,"utf-8");
 
$sql2= "INSERT INTO post ( title, text, rating, login) VALUES ('".$title."', '".$text."', '20', '".$a."')";
 
 mysqli_query($conn, $sql2);
 
 ; 	
};
header('Location:home.php');
?>
