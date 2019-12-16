<?php
  $servername="localhost";  
  $username="root";  
  $password="";
  $dbname="mysite"; 
  $conn = mysqli_connect($servername,$username, $password,$dbname);
  $a=0;
  mysqli_set_charset($conn,"utf-8");
  $email = $_POST['email'];
  $login = $_POST['login'];
  $password1 = $_POST['password1'];
  $password2 = $_POST['password2'];
  if (!isset($email)){ echo "ENTER E-MAIL<br>" ;}
  elseif (!preg_match("/^[a-zA-Z0-9\.\-]+@[a-z]+\.[a-z]+$/", $email)) {echo "ENTER CORRECT E-MAIL<br>";}
    else {
      $sql= "SELECT * FROM  users WHERE email='$email'";
      $result=mysqli_query($conn,$sql);
      $num=mysqli_num_rows($result);
      if ($num==0)
        {$a++;}
      else{echo "ENTER ANOTHER EMAIL<br>";}
    }
  if (!isset($login)){echo "ENTER LOGIN<br>";}
  elseif((!preg_match("/^[a-zA-Z]+[a-zA-Z0-9\_]+$/", $login))||(iconv_strlen($login,'UTF-8')<6)){echo "ENTER CORRECT LOGIN<br>";}
    else {
      $sql1= "SELECT * FROM  users WHERE login='$login'";
      $resul1=mysqli_query($conn,$sql1);
      $num1=mysqli_num_rows($resul1);
      if ($num1==0)
        {$a++;}
      else {echo "ENTER ANOTHER LOGIN<br>";}
    }
  if (!isset($password1)){echo "ENTER PASSWORD<br>";}
  elseif (!isset($password2)){echo "ENTER RE-PASSWORD<br>";}
    elseif($password1!=$password2){echo"ENTER CORRECT RE-PASSWORD<br>";}
      elseif ((!preg_match("/[a-z]/", $password1)) || (!preg_match("/[A-Z]/", $password1)) || (!preg_match("/[0-9]/", $password1)) ||  (iconv_strlen($password1,'UTF-8')<6)){echo "ENTER CORRECT PASSWORD<br>";}
        else {$a++;}
  if($a==3)
  {
    if($password1==$password1){$a++;}else{echo "PASSWORD DO NOT MATCH";};
  }
  if($a==4)
  { $sql2="INSERT  INTO  users (Email,Login,Password)
        VALUES('".$email."','".$login."','".$password1."')";
    mysqli_query($conn,$sql2);
    header('Location:home.php'); }else{header('Location:registration.html');}
  mysqli_close($conn);
?>


