<body>
<?php
ob_start();
session_start();
include "connectDB.php";
$sql="select * from cart where username='$_SESSION[user]'";
$result=mysqli_query($link,$sql);

  echo"<table border=0>";
    while($dbarr=mysqli_fetch_row($result)){
      $sql1="select * from location where id='$dbarr[1]'";
      $result1=mysqli_query($link,$sql1);
      while($dbarr1=mysqli_fetch_row($result1)){
echo"<center>";
echo"<tr>";
echo"<td><img src=".$dbarr1[4]." width=200px height=auto ></td>
<td>".$dbarr1[1]."</td>
<td>".$dbarr1[2]."</td>
<td><a class=button2 href=".$dbarr1[5].">..รายละเอียด..</a></td>
<td>
<a class=button2 href=map.php?location=".$dbarr1[3].">..แผ่นที่..</a>
</td>
<td><input  class=button2 type=button value=ลบ onclick=deletecart(".$dbarr1[0].");></td>";
echo"</tr>";
echo"</center>";
  }
}
  echo"</table>";

  ob_end_flush();
?>
<script  src="js/index.js"></script>
</body>
