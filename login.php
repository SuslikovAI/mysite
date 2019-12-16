<?php
		session_start();
		$servername="localhost";  
		$username="root";  
		$password="";
		$dbname="mysite"; 
		$conn  =  mysqli_connect($servername,  $username,  $password,$dbname);
		mysqli_set_charset($conn,"utf-8");
		$password = $_POST['password'];
		$login = $_POST['login'];
		if (!isset($_SESSION['login'])){
			$a=0;
			if ((!isset($login))||(!isset($password))){ echo "ENTER LOGIN OR PASSWORD<br>" ;}
			else { $sql= "SELECT * FROM  users WHERE Login='$login' and Password='$password'";
					$result=mysqli_query($conn,$sql);
					$num=mysqli_num_rows($result);
				if($num!=0)
				 {    $row=mysqli_fetch_row($result); 
				 	  $_SESSION['login']=$row[2];
			          $_SESSION['ID']=$row[0];
			          $_SESSION['Category']=$row[4];
						header('Location:home.php');}
			else {echo "ENTER CORRECT LOGIN OR PASSWORD";}            }
			 }
		else {if ($login=='admin') {header('Location:admin.php');}else
			{header('Location:home.php');};};
	mysqli_close($conn);
?>
