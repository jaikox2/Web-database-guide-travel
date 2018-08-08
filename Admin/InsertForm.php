<html>
<head><title>Location Form</title>
</head>
<body>
<form action="insertFinish.php" method="POST">
<H2>Location Form</H2>
Name:<input type="text" name="name"><p>
Address:<input type="text" name="address"><p>
MapLocation:<input type="text" name="map"><p>
Fileimage:<input type="text" name="image"><p>
FileName:<input type="text" name="fliename"><p>
Type:<input type="radio" name="kind" value="อนุรักษ์">อนุรักษ์
		<input type="radio" name="kind" value="ประวัติศาสตร์">ประวัติศาสตร์<p>
    <input type="radio" name="kind" value="วัฒนธรรม">วัฒนธรรม<p>
<p>
<input type="submit" name="submit" value="Submit">
<input type="reset" name="reset" value="Cancel">
</form>
</body>
</html>
