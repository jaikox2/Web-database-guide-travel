<?php ob_start();
session_start();
$username=$_POST['Username'];
$password=$_POST['Password'];

if($username =="root" && $password =="1234" ){
  $_SESSION["username"]=$username;
  $_SESSION["password1"]=$password;
  include "homeAdmin.php";
}else{
  echo "รหัสไม่ถูกต้อง<br>";
  echo"<a href=http://localhost/PJ/page5.php#>ล็อกอินใหม่</a>";
}

ob_end_flush();
 ?>
