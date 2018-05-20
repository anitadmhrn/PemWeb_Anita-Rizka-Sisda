<!DOCTYPE html>
<html lang="en">
<head>
<title>[Review Book] Tengok Kanan</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="web.css"/>
</head>

<div class="fixed-bg">
<body>
<?php

include 'index.php';
 ?>
<div class="header">
    <img src="logo.png" height= "60" width= "60">
    <h1>- Tengok Kanan -</h1>
    <h3>Review Book</h3>
  <p></p>
</div>


  <div class="topnav" id="myTopnav">
    <a href="#home" class="active">Home</a>
    <div class="dropdown">
      <button class="dropbtn">Fiction 
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="#">Fantasy</a>
        <a href="#">Romance</a>
        <a href="#">Comedy</a>
        <a href="#">Mystery</a>
      </div>
    </div> 
    <div class="dropdown">
        <button class="dropbtn">Non-Fiction 
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="#">History</a>
          <a href="#">Biography</a>
          <a href="#">Essay</a>
          <a href="#">Text-Book</a>
        </div>
      </div> 
    <a href=about.html>About</a>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>

    <a href=data.php>Data Reviewer</a>
  </div>




  <style>
    .mySlides {display:none;
      width: 500px;
      height:400px;
      position: relative;
}
    </style>
    <body>
      <div class="w3-content w3-section">
      <img class="mySlides" src="q1.jpg" width="300px"height="200px">
      <img class="mySlides" src="b4.jpg" width="300px" height: "200px">
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
        setTimeout(carousel, 2000); // Change image every 2 seconds
    }
    </script>


<div class="row">
  <div class="side">
      <h2>About Me</h2>
      <h5>Photo of me:</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
      <h3>More Text</h3>
      <p>Lorem ipsum dolor sit ame.</p>
      <div class="fakeimg" style="height:60px;">Image</div><br>
      <div class="fakeimg" style="height:60px;">Image</div><br>
      <div class="fakeimg" style="height:60px;">Image</div>
  </div>

  <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
    </script>

  <div class="main">
    <h2>Review Atheis (Achdiat K. Mihardja): Antara Perenjak dan Manyar</h2>
    <h5>Sisda Amalia Utrujah, April 26, 2017</h5>
    <table>
      <tr>
        <td>
        <img src="img01.jpg"; height="400px">
        </td>
        <td valign="top">
          <table>
            <tr>
              <td>Judul</td>
              <td>: Atheis</td>
            </tr>
            <tr>
              <td>Penulis</td>
              <td>: Achdiat K. Mihardja</td>
            </tr>
            <tr>
              <td>Penerbit</td>
              <td>: Balai Pustaka</td>
            </tr>
            <tr>
              <td>Tebal Buku</td>
              <td>: 232 halaman</td>
            </tr>
          </table>
          <td valign="bottom" align="right">
              <a href="rvw1.html">Read More</a>
              
          </td>
        </td>
      </tr>
    </table>
      
      </div>
      </div>
</div>

  <div class="footer">  
   <h6>Copyright © 2018. All rights reserved. Design and developed by AnitaDM [1657051008] _ Rizka Amalia [1617051052] _ Sisda Amalia Utrujah [1617051075]</h6>
  </div>


</div>
</body>



</html>
