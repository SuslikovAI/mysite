<html>
<head>
	<style>
	
#body
{
	background-size: 100%;
background-image:url(log.jpg);background-attachment: fixed
}
* {
	box-sizing: border-box;
}
body {
	background-color: white;
	font-family: Arial;
	padding: 0 5% 0 5%;
	padding-top: 60px;
	padding-bottom: 30px;
}
.a1 {outline: 1px solid #000;background-color: #FFB273;
	 width: 90%;
	position: fixed;
    top: 5px;
    left: 5%;
    margin: 0;
	 }

     .a3 {
	 color: black;
	 width : 40%;
	 height :80%;
	  padding: 2px;
	 }
	 .a5 { display: block;
	position: fixed;
    bottom: 5px;
    left: 5%;
	text-align: center;
	background-color: gray;
	font-size: 20px;
	padding-top: 5px;
	width: 90%;
	text-decoration: none;
	color: black;
	border-radius: 2px;
	 }

</style>
	<title>home</title>
	<meta charset="utf-8">
</head>
<body id="body">
    <div class="a1"><p><h1><big>Анекдоты</big></h1>
<a href="post.html">Уже поделились анекдотом???</a>
<a href="history.html">Назад в Историю</a> <a href="prav.html">Правила Использования</a> 
<form action="home.php" method="post">
 <input type="submit" value="Проголосовать"><a href="logout.php">Выход</a></p>
	</div>
     <div class="a3">
<?php
	session_start();
	if (isset($_SESSION['login']))
	{
		$servername="localhost";  
		$username="root";  
		$password="";
		$dbname="mysite"; 
		$conn  =  mysqli_connect($servername,  $username,  $password, $dbname);
			for($x=99;$x>0;$x--)
			{
				$result  =  mysqli_query( $conn,  "SELECT * FROM post WHERE rating = '".$x."'" );
				while (  $row  =  mysqli_fetch_row($result)  )
				{
					echo "<h1>$row[1] <small><small><small><small>by $row[4]</small></small></small></small></h1>
					<h2>$row[2]<h2> <p>+ <input
					type='radio' name='$row[0]' value='0'></p> <p>- <input type='radio' 
					name='$row[0]' value='1'></p> <br>";
				}       
			 if (isset($_POST('$row[0]')))
			{
				if ($_POST('$row[0]'))=='0')
				{
					$sql = "UPDATE post SET rating=rating+1
					WHERE id='".$row[0]."'";
				} else {
					$sql = "UPDATE post SET rating=rating-1 WHERE id='".$row[0]."'";
				}
				if($row[3]<0)
				{
					mysqli_query($conn, "DELETE * FROM post where id = ".$_row[0]."");
				}
				if (mysqli_query($conn, $sql)) 
				{
					echo "Record updated successfully";
				} else {
					echo "Error updating record: " . mysqli_error($conn);
				}
			}
		}
		mysqli_close($conn);		
	}						
?>
    </div>
    <div class="a5">
        <a href="post.html">Уже поделились анекдотом???</a> 
    </div>

</body>
</html>
