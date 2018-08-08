<?php
ob_start();
session_start();
include "connectDB.php";
$sql="select * from cart where username='$_SESSION[user]'";
		$result=mysqli_query($link,$sql);
		$num_item=mysqli_num_rows($result);
    echo $num_item;


ob_end_flush();
 ?>
