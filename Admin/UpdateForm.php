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

$sql="select * from location where id='$No'";
$result=mysqli_query($link,$sql);
echo"<hr><p>";
echo"<form action=UpdateFinished.php?no=$No method=POST>";
while($dbarr=mysqli_fetch_row($result)){
  echo"ID:".$dbarr[0]."<p>";
  echo"Name:<input type=text name=name value=".$dbarr[1]."><p>";
  echo"Address:<input type=text name=address value=".$dbarr[2]."><p>";
  echo"MapLocation:<input type=text name=map value=".$dbarr[3]."><p>";
  echo"Flieimage:<input type=text name=image value=".$dbarr[4]."><p>";
  echo"FlieName:<input type=text name=fliename value=".$dbarr[5]."><p>";
  echo"Type:<input type=radio name=kind value=อนุรักษ์>อนุรักษ์
  		<input type=radio name=kind value=ประวัติศาสตร์>ประวัติศาสตร์<p>
      <input type=radio name=kind value=วัฒนธรรม>วัฒนธรรม<p>";
}
echo"<input type=submit name=submit value=Update>";
echo"</form>";
    mysqli_close($link);
  }else{
     echo "กรุณาล๊อกอินก่อนครับ";
  }
    ob_end_flush();
 ?>
