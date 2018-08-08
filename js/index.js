$(function() {
  $("#fullPage").click(function() {

    $("#header").toggleClass("full-page");
    $("#rightWrapper").toggleClass("full-page");
  });
})

$(function() {
  $("#listView li").click(function () {
    if ( $("#listView li").removeClass("list-item-active") ) {
      $("#listView li").hasClass("list-item-active");
    }
    $(this).addClass("list-item-active");
  });
});


window.onload=function(){
  setInterval('showUser()',1000);
  setInterval('showcart()',1000);
}

function showUser() {
  if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp = new XMLHttpRequest();
  } else {
      // code for IE6, IE5
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          document.getElementById("item").innerHTML = this.responseText;
      }
  };
  xmlhttp.open("GET","cart.php",true);
  xmlhttp.send();
}

function addtocart(str) {
if (str == "") {
  document.getElementById("add(x);").innerHTML = "";
  return;
} else {
  if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp = new XMLHttpRequest();
  } else {
      // code for IE6, IE5
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          alert(this.responseText);
      }
  };
  xmlhttp.open("GET","addtocart.php?id="+str,true);
  xmlhttp.send();
}
}


function showcart() {
  if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp = new XMLHttpRequest();
  } else {
      // code for IE6, IE5
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          document.getElementById("incart").innerHTML = this.responseText;
      }
  };
  xmlhttp.open("GET","test.php",true);
  xmlhttp.send();
}

function deletecart(str) {
if (str == "") {
  document.getElementById("").innerHTML = "";
  return;
} else {
  if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp = new XMLHttpRequest();
  } else {
      // code for IE6, IE5
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          alert(this.responseText);
      }
  };
  xmlhttp.open("GET","deletecart.php?id="+str,true);
  xmlhttp.send();
}
}
