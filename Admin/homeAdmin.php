<?php
ob_start();
if(!session_id()){
        session_start();
        }
if(isset($_SESSION['username']) && isset($_SESSION['password1'])){
$link=mysqli_connect("localhost","root");
mysqli_set_charset($link,'utf8');
$result=mysqli_query($link,"Use minipj;");

		$sql="select * from location";
		$result=mysqli_query($link,$sql);
		$num_record=mysqli_num_rows($result);
    echo"<hr>";

    echo"<h3>ข้อมูลสถานที่</h3>";
    echo"<hr><p>";
    echo"<table border=1>";
    echo"<tr>";
    echo"<h2><td>ID</td><td>Name</td><td>Address</td><td>MapLocation</td><td>Fileimage</td><td>FileName</td><td>Type</td><td>Edit</td><td>Delete</td></h2>";
    echo"</tr>";
		$i=0;
		while($dbarr=mysqli_fetch_row($result)){
      echo"<tr>";
			echo"<td>".$dbarr[0]."</td><td>".$dbarr[1]."</td><td>".$dbarr[2]."</td><td>".$dbarr[3]."</td><td>".$dbarr[4]."</td><td>".$dbarr[5]."</td><td>".$dbarr[6]."</td><td><a href=UpdateForm.php?No=".$dbarr[0].">Edit</a></td><td><a href=Delete.php?No=".$dbarr[0].">Delete</a></td>";
			echo"</tr>";
			$i=$i+1;
		}
    echo"</table>";
      echo"<p>&nbsp&nbsp&nbsp<a href=InsertForm.php>INSERT DATA</a><br>";
    echo"<hr>จำนวนทั้งหมด เท่ากับ ".$num_record." สถานที่ <p>";

    echo"<hr>";

    echo"<h3>ข้อมูลผู้ใช้</h3>";

    $sql1="select * from user";
		$result1=mysqli_query($link,$sql1);
		$num_record1=mysqli_num_rows($result1);
    echo"<hr><p>";
    echo"<table border=1>";
    echo"<tr>";
    echo"<h2><td>Username</td><td>Email</td></h2>";
    echo"</tr>";
		$i=0;
		while($dbarr1=mysqli_fetch_row($result1)){
      echo"<tr>";
			echo"<td>".$dbarr1[0]."</td><td>".$dbarr1[2]."</td>";
			echo"</tr>";
			$i=$i+1;
		}
    echo"</table>";
    echo"<hr>จำนวนทั้งหมด เท่ากับ ".$num_record1." คน <p>";

    echo"<hr>";
    echo"<h3>ข้อมูลผู้ใช้ที่เลือกสถานที่</h3>";

    $sql11="select * from cart";
    $result11=mysqli_query($link,$sql11);
    $num_record11=mysqli_num_rows($result11);
    echo"<hr><p>";
    echo"<table border=1>";
    echo"<tr>";
    echo"<h2><td>Username</td><td>IDLocation</td></h2>";
    echo"</tr>";
    $i=0;
    while($dbarr11=mysqli_fetch_row($result11)){
      echo"<tr>";
      echo"<td>".$dbarr11[0]."</td><td>".$dbarr11[1]."</td>";
      echo"</tr>";
      $i=$i+1;
    }
    echo"</table>";
    echo"<hr>จำนวนทั้งหมด เท่ากับ ".$num_record11." สถานที่ <p>";
    echo"<p>&nbsp&nbsp&nbsp<a href=out.php>LOGOUT</a><br>";
    mysqli_close($link);
  }else{
     echo "กรุณาล๊อกอินก่อนครับ";
  }
    ob_end_flush();
 ?>
