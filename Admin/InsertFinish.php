<?php
ob_start();
if(!session_id()){
        session_start();
        }
if(isset($_SESSION['username']) && isset($_SESSION['password1'])){
$link=mysqli_connect("localhost","root");
mysqli_set_charset($link,'utf8');
$result=mysqli_query($link,"Use minipj;");

$name=$_POST['name'];
$address=$_POST['address'];
$maplocation=$_POST['map'];
$fileimage=$_POST['image'];
$filename=$_POST['fliename'];
$type=$_POST['kind'];

$sql="Insert into location (name,address,maplocation,fileimage,filename,type) values('$name','$address','$maplocation','$fileimage','$filename','$type');";
$result=mysqli_query($link,$sql);
if($result){
			echo"Insert Finished <br>";
			echo"<a href=homeAdmin.php>Show data</a><br>";
			echo"<a href=InsertForm.php>Insert data more</a>";
	}else{
		echo"Insert Fail<p>";
		echo"<a href=InsertForm.php>Insert data again</a>";
	}
    mysqli_close($link);
  }else{
     echo "กรุณาล๊อกอินก่อนครับ";
  }
    ob_end_flush();
 ?>
