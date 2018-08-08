<?php ob_start();
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
include "connectDB.php";

$sql="select * from user where username='$username'";
$result=mysqli_query($link,$sql);
while($dbarr=mysqli_fetch_array($result)){
  $name=$dbarr['username'];
  $pass=$dbarr["password"];
}


if($username == $name && $password == $pass ){
  $_SESSION["user"]=$username;
  $_SESSION["password"]=$password;
  include "home.php";
}else{
  echo "รหัสไม่ถูกต้อง<br>";
  echo"<a href=index.html >ล็อกอินใหม่</a>";
}



ob_end_flush();
 ?>
