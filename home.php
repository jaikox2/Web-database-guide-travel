<!DOCTYPE html>
<html lang="en" >
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
    border: 1px solid #ccc;
}

div.gallery:hover {
    border: 1px solid #2DCC70;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
    font-family: Prompt;
    font-weight: MediumItalic;
}



.responsive {
    padding: 0 6px;
    float: left;
    width: 33.33%;
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

.text1 {
  background-color: #2DCC70;
  color: #fff;
  border: 2px solid #fff;
  font-family: Prompt;
  font-weight: MediumItalic;
}


</style>

</head>
<?php ob_start(); ?>
<body>
<?php if(!session_id()){
        session_start();
        }

      if(isset($_SESSION['user']) && isset($_SESSION['password'])){

?>
  <div id="wrapper">
  <div id="leftWrapper">
      <div id="listView" class="list">
        <li class="list-item-active">
        <a href="home.php">หน้าแรก</a></li>
        <li><a href="page1.php">อนุรักษ์</a></li>
        <li><a href="page2.php">ประวัติศาสตร์</a></li>
        <li><a href="page3.php">วัฒนธรรม</a></li>
        <li><a href="page5.php">ผู้ดูแลระบบ</a></li>
        <li><a href="out.php">ออกจากระบบ</a></li>
      </div>
    </div>

    <div id="rightWrapper">
      <div id="header"><a id="fullPage" href="#">|||</a><a id="center">LANGKASUKA</a>
        <form id="seachform" class="form-group">
          <input  class="text1" type="text" value=" Search " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
          <input  class="button1" type="submit" value="Go">
        </form>
        <div id="cart">
        <a href="incart.php">
          <span class="simpleCart_total"></span> (<span id="item"></span> items)
          </a>
          </div>
          <img id="box" src="Boxicon2.png" alt="" height="auto" width="1.7%">


      </div>
      <div id="contentWrapper">
        <article id="showCase">
        <section>
        <div class="container">
        <img  class="mySlides" src="sea1.jpg" alt="Norway" width="1000" height="300">
        <img class="mySlides" src="kaoyam.jpg" style="width:100%">
        <img class="mySlides" src="masyid.jpg" style="width:100%">
        </div>
        </section>
        </article>

        <article >
          <div class="article-header">การท่องเที่ยวในแบบของเรา</div>
            <section>
            <div class="responsive">
          <div class="gallery">
            <a target="#" href="page1.php">
              <div class="con">
              <img src="sea.png" alt="Avatar" class="image">
              <div class="overlay">
              <div class="text">อนุรักษ์</div>
              </div>
              </div>
          </a>
          <div class="desc">
            <h4>การท่องเที่ยวเชิงอนุรักษ์</h4><br>
            เป็นสถานที่การท่องเที่ยวในเชิงอนุรักษ์ไม่ว่าจะเป็นการท่องเที่ยวที่เป็นธรรมชาติที่ได้รับการอนุรักษ์ใว้<br><br>
          </div>
          </div>
          </div>
          <div class="responsive">
        <div class="gallery">
          <a target="#" href="page2.php">
            <div class="con">
            <img src="boat1.jpg" alt="Avatar" class="image">
            <div class="overlay">
            <div class="text">ประวัติศาสตร์</div>
            </div>
            </div>
        </a>
        <div class="desc">
          <h4>การท่องเที่ยวเชิงประวัติศาสตร์</h4><br>
          เป็นสถานที่การท่องเที่ยวในประวัติศาสตร์อย่างที่รู้กันดีว่าสามจังหวัดชายแดนใต้เป็นพื้นที่ที่เคยเป็นเมืองของตัวเองเมื่อก่อนพายแพ้ให้กับสยาม
        </div>
        </div>
        </div>
        <div class="responsive">
      <div class="gallery">
        <a target="#" href="page3.php">
          <div class="con">
          <img src="lasea.jpg" alt="Avatar" class="image">
          <div class="overlay">
          <div class="text">วัฒนธรรม</div>
          </div>
          </div>
      </a>
      <div class="desc">
        <h4>การท่องเที่ยวเชิงวัฒนธรรม</h4><br>
        การท่องเที่ยวในแบบที่ไม่เหมือนใครก็ต้องท่องเที่ยวให้รู้ลึกถึงวัฒนธรรมของพื้นที่นั้นๆถึงจะสนุก<br><br>
      </div>
      </div>
      </div>
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
    setTimeout(carousel, 3000); // Change image every 2 seconds
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
