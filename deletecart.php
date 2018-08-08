<?php
ob_start();
session_start();
$id=$_GET['id'];
include "connectDB.php";
$sql="delete from cart where username='$_SESSION[user]' and idlocation='$id';";
$result=mysqli_query($link,$sql);
if($result){
  echo "ลบเรียบร้อย";
}else{
  echo "ลบไม่สำเร็จ";
}
ob_end_flush();
?>
