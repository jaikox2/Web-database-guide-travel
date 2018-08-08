<?php ob_start();
      session_start();
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
include "connectDB.php";

$sql="Insert into user (username,password,email) values('$username','$password','$email');";
$result=mysqli_query($link,$sql);

if($result){
  $_SESSION["user"]=$username;
  $_SESSION["password"]=$password;
  include "home.php";
}else{
  echo "มีชื่อนี้อยู่แล้วกรุณาใช้ชื่ออื่น<br>";
  echo"<a href=index.html >ลงทะเบียนใหม่</a>";
}




ob_end_flush();
 ?>
