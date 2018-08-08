<?php
  ob_start();
  session_start();
  $id=$_GET['id'];
  include "connectDB.php";
  $sql="Insert into cart (username,idlocation) values('$_SESSION[user]','$id');";
  $result=mysqli_query($link,$sql);
  if($result){
    echo "เลือกเรียบร้อย";
  }else{
    echo "ได้เลือกแล้ว";
  }
  ob_end_flush();
 ?>
