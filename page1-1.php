<!DOCTYPE html>
<html lang="en" >
<?php ob_start();?>
<?php session_start();
      if(isset($_SESSION['user']) && isset($_SESSION['password'])){

?>
<head>
  <meta charset="UTF-8">
  <title>Some more ideas</title>
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.mySlides {display:none;}

.container {
    position: relative;
}

.center {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 18px;
    font-style: italic;
    color: white;

}

.container img {
    width: 100%;
    height: 10%;
    opacity: 0.9;
}

div.gallery {
    border: 0px solid #ccc;
    position: relative;
}

div.gallery:hover {
    border: 0px solid #2DCC70;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: left;
}



.responsive {
    padding: 0 6px;
    float: center;
    width: 90.33%;
}

@media only screen and (max-width: 700px){
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
}

@media only screen and (max-width: 500px){
    .responsive {
        width: 100%;
    }
}

.clearfix:after {
    content: "";
    display: table;
    clear: both;
}

.con {
  position: relative;
  width: auto;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  bottom: 100%;
  left: 0;
  right: 0;
  background-color:#2DCC70;

  overflow: hidden;
  width: 100%;
  height:0;
  transition: .5s ease;
  font-family: Prompt;
  font-weight: MediumItalic;
}

.con:hover .overlay {
  bottom: 0;
  height: 100%;
}

.text {
  white-space: nowrap;
  color: white;
  font-size: 20px;
  position: absolute;
  overflow: hidden;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}

.search{
  width: 25%;
  background-color: #fff;
}
.search input[type="text"] {
	outline: none;
  background: none;
  width: 91%;
  border: none;
  font-size: 2.0em;
  color: #000;
   font-weight: 700;
}
.search input[type="submit"] {
	border: none;
	cursor: pointer;
	outline: none;
  background: #c7c7c7;
  font-size: 1.2em;
  color: #000;
  padding: 3px;
  font-weight: 700;
}
.search input[type="submit"]:hover {
  background: #EF5F21;
  color: #fff;
    transition: 0.5s all;
  -webkit-transition: 0.5s all;
  -o-transition: 0.5s all;
  -moz-transition: 0.5s all;
  -ms-transition: 0.5s all;
}
.button1 {
    background-color: #2DCC70;
    color: #fff;
    border: 2px solid #fff;
    font-family: Prompt;
    font-weight: MediumItalic;
}

.button1:hover {
    border: 2px solid #fff;
    background: #fff;
    color: #000;
    font-family: Prompt;
    font-weight: MediumItalic;
}

.button2 {
    background-color: #2DCC70;
    color: #fff;
    border: 2px solid #fff;
    font-family: Prompt;
    font-weight: MediumItalic;
}

.button2:hover {
    border: 2px solid #fff;
    background: #fff;
    color: #000;
    font-family: Prompt;
    font-weight: MediumItalic;
}

.text1 {
  background-color: #2DCC70;
  color: #fff;
  border: 2px solid #fff;
  font-family: Prompt;
  font-weight: MediumItalic;
}

#buttoncart{
  position: absolute;
  top: 90%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-family: Prompt;
  font-size: 0.9em;
  font-weight: MediumItalic;
  color: white;
}



</style>

</head>

<body>
  <div id="wrapper">
  <div id="leftWrapper">
      <div id="listView" class="list">
        <li><a href="home.php">หน้าแรก</a></li>
        <li><a href="page1.php">อนุรักษ์</a></li>
        <li><a href="page2.php">ประวัติศาสตร์</a></li>
        <li class="list-item-active"><a href="page3.php">วัฒนธรรม</a></li>

        <li><a href="page5.php">ผู้ดูแลระบบ</a></li>
        <li><a href="out.php">ออกจากระบบ</a></li>
      </div>
    </div>

    <div id="rightWrapper">
      <div id="header"><a id="fullPage" href="#">|||</a><a id="center">วัฒนธรรม</a>
        <form id="seachform" class="form-group">
          <input  class="text1" type="text" value=" Search " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
          <input  class="button1" type="submit" value="Go">
        </form>
        <div id="cart">
        <a href="incart.php">
          <span class="simpleCart_total"></span> ( <span id="item" ></span> items)
          </a>
          </div>
          <img id="box" src="Boxicon2.png" alt="" height="auto" width="1.7%">


      </div>
      <div id="contentWrapper">
        <article>
          <section id="fix">
        <center>
          <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="sea.png">
            <div class="con">
              <img  class="mySlides" src="มัสยิดกลางปัตตานี1.jpg" alt="Norway" width="1000" height="300">
              <img class="mySlides" src="มัสยิดกลางปัตตานี2.jpg" style="width:100%">
              <img class="mySlides" src="มัสยิดกลางปัตตานี3.jpg" style="width:100%">
            </div>
        </a>
        <div class="desc"> มัสยิดกลางจังหวัดปัตตานีสร้างเป็นตึกคอนกรีตเสริมเหล็กสองชั้น รูปทรงคล้ายกับ “ทัชมาฮาล” ประเทศอินเดีย
ตรงกลางเป็นอาคารมียอดโดมขนาดใหญ่และมีโดมบริวาร 4 ทิศ มีหอคอยอยู่สองข้างสูงเด่นเป็นสง่า
บริเวณด้านหน้ามัสยิดมีสระน้ำสี่เหลี่ยมขนาดใหญ่ ภายในมัสยิดมีลักษณะเป็นห้องโถง มีระเบียงสองข้าง
ภายในห้องโถงมีบัลลังก์ทรงสูงและแคบเป็นที่สำหรับ “คอฏีบ” ยืนอ่านคุฏบะฮ์ในการละหมาดวันศุกร์
หอคอยสองข้างนี้เดิมใช้เป็นหอกลางสำหรับตีกลอง เป็นสัญญาณเรียกให้มุสลิมมาร่วมปฏิบัติศาสนกิจ ต่อมาใช้เป็นที่ติดตั้งลำโพง
เครื่องขยายเสียงแทนเสียงกลอง ปัจจุบันขยายด้านข้างออกไปทั้ง 2 ข้าง และสร้างหอบัง (อะซาน)
พร้อมขยายสระน้ำและที่อาบน้ำละหมาดให้ดูสง่างามยิ่งขึ้น ภายในมัสยิดประดับด้วยหินอ่อนอย่างสวยงาม


        </div>

        </div>
        </div>
        </center>
          <div class="clearfix"></div>
        </section>

      </article>




        <article>
          <div class="article-header">Contect | | About</div>
          <section>
    <div class="row">
      <div class="col-sm-4">
                <br>
                <center>
                  <img src="http://oi60.tinypic.com/w8lycl.jpg" class="img-circle" alt="the-brains">
                  <br>
                  <h4 class="footertext">Programmer</h4>
                  <p class="footertext">You can thank all the crazy programming here to this guy.<br>
                </center>
      </div>
      <div class="col-sm-4">
                <br>
                <center>
                  <img src="http://oi60.tinypic.com/2z7enpc.jpg" class="img-circle" alt="...">
                  <br>
                  <h4 class="footertext">Artist</h4>
                  <p class="footertext">All the images here are hand drawn by this man.<br>
                </center>
      </div>
      <div class="col-sm-4">
                  <br>
                  <center>
                    <img src="http://oi61.tinypic.com/307n6ux.jpg" class="img-circle" alt="...">
                    <br>
                    <h4 class="footertext">Designer</h4>
                    <p class="footertext">This pretty site and the copy it holds are all thanks to this guy.<br>
                  </center>
      </div>
    </div>
          </section>
        </article>
      </div>
    </div>
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 6000); // Change image every 2 seconds
}
</script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>
    <?php
    }else{
       echo "กรุณาล๊อกอินก่อนครับ";
    }
        ob_end_flush();
     ?>

</body>
</html>
