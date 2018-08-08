<?php
ob_start();
if(!session_id()){
        session_start();
        }
if(isset($_SESSION['username']) && isset($_SESSION['password1'])){
$link=mysqli_connect("localhost","root");
mysqli_set_charset($link,'utf8');
$result=mysqli_query($link,"Use minipj;");

$No=$_GET['no'];
$name=$_POST['name'];
$address=$_POST['address'];
$maplocation=$_POST['map'];
$fileimage=$_POST['image'];
$filename=$_POST['fliename'];
$type=$_POST['kind'];

$sql="update location set name='$name',address='$address',maplocation='$maplocation',fileimage='$fileimage',filename='$filename',type='$type' where id='$No'";
$result=mysqli_query($link,$sql);
if($result){
		echo"Update Finished <p>";
    echo"<a href=homeAdmin.php>Show data</a><br>";

}else{
  echo"Insert Fail<p>";

}
    mysqli_close($link);
  }else{
     echo "กรุณาล๊อกอินก่อนครับ";
  }
    ob_end_flush();
 ?>
