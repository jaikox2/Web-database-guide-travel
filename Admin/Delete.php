<?php
ob_start();
if(!session_id()){
        session_start();
        }
if(isset($_SESSION['username']) && isset($_SESSION['password1'])){
$link=mysqli_connect("localhost","root");
mysqli_set_charset($link,'utf8');
$result=mysqli_query($link,"Use minipj;");

$No=$_GET['No'];

$sql="delete from location where id='$No';";
$result=mysqli_query($link,$sql);
if($result){
		echo"Delete Finished <p>";
    echo"<a href=homeAdmin.php>Show data</a><br>";

}else{
  echo"Delete Fail<p>";

}
mysqli_close($link);
  }else{
     echo "กรุณาล๊อกอินก่อนครับ";
  }
    ob_end_flush();
 ?>
