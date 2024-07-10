<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.css"
  rel="stylesheet"
/>

<script src="jsmd/mdb.min.js"></script>
<link rel="stylesheet" type="text/css" href="cssmd/mdb.min.css">

<?php
session_start();
?>



<!DOCTYPE html>
<html>
<head>
  <title>student</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <script src="js/bootstrap.bundle.min.js"></script>
    <style type="text/css">
        .vision{
  font-size:30px;
  margin-left: 20px;
  color: green; 

}
.ppoint{
  font-size:25px;
  color: black;
  margin-left: 20px;
  }
 .sidebar {
    height: 100%;
    width: 10px;
    position: fixed;
    z-index: 1;
    top: 10;
    left: 0;
    background-color: skyblue;
    overflow-x: hidden;
    transition: 0.3s;
    padding-top: 60px;
}



.sidebar a {
    padding: 10px 15px;
    text-decoration: none;
    font-size: 25px;
    color: white;
    display: block;
    transition: 0.2s;
}

.sidebar a:hover {
    color: red;
}

.sidebar .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}
.navv{
  margin-top: 10px;
  color: white;
  cursor: pointer;
}
.openbtn {
    font-size: 30px;
    cursor: pointer;
    border: none;
    background: none;
    color: black;
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    transition: color 0.3s;
    margin-left: 0px;
    margin-bottom: 7px;
     position: absolute;
}

.openbtn:hover {
    color: #444;
}

#main {
    transition: margin-left 0.5s;
    padding: 16px;
    margin-bottom: 7px;
}

@media screen and (max-height: 450px) {
    .sidebar {padding-top: 15px;}
    .sidebar a {font-size: 18px;}
}

        .marquee-container {
            position: relative;
            width: 100%;
            overflow: hidden;
            white-space: nowrap;
        }

        .marquee {
            display: inline-block;
            padding-left: 100%;
            animation: marquee 90s linear infinite;
            color: green;
            font-size: 20px;

        }

        @keyframes marquee {
           50% {
        transform: translateX(-100%);
    }
            from {
                transform: translateX(100%);
            }
            to {
                transform: translateX(-100%);
            }
        }
        .mctcourse{
          float: center;
          color: blue;
          margin: l
        }
 .img{
  border-radius: 100%;
  float: left;
  width: 140px;
  height: 140px;
  border-radius: 100px;
  font-size: 20px;
 
}
a{
  color: white;
  margin-right: 5px;
   text-decoration: none;
   cursor: pointer;
   margin-top: 15px;
}
nav{
   display: inline-block;
   float: right;
   margin-right: 5px;
   text-decoration: none;
   cursor: pointer;
   margin-top: 15px;
}
.content2{
width: 100%;
  height: 120px;
  background-color: skyblue;

  
}
h1{
 margin-top: 12px;
 float: center;
 font-size: 23px;
}
.text-reset{
  text-decoration: none;
  cursor: pointer;

}
.img2{
   border-radius: 100%;
  float: right;
  width: 140px;
  height: 140px;
  border-radius: 100px;
}
.content{
  width: 100%;
  height: 160px;
  background-color: blue;
  color: white;
}
.pp{
 margin-left: 340px;
}
.machame{
 margin-left: 380px;
  color: white;
  font-size: 20px;
}
.machame2{
 margin-left: 340px;
  color: white;
  font-size: 20px;
}
h1{
  font-size: 30px;
   margin-left: 140px; 
 color: white;
}.head{
  font-size: 30px;
}
    </style>
 <div class="content2">
     <h1>WELCOME STUDENT PAGE </h1>

  <nav>
   
    
      <a href="#">HOME</a>
      <a href="#">ABOUT</a>
      <a href="#">STUDENTINFO</a>
      <a href="logout.php"><button class="btn btn-primary">logout</button></a>
    

  </nav>
  <div class="navbar navbar-default">
    <div class="navbar-fixed-top">
    <div class="container-fluid">
    <div class="navbar-header">
      
        <div class="sidebar" id="sidebar">
        <a href="#" class="closebtn" onclick="toggleNav()">&times;</a>
        <a href="studenthome.php" ><i class="fas fa-home me-3"></i>HOME</a>
      <a href="permissionbox.php"><i class="fa-solid fa-envelope me-1"></i>PERMISSIONBOX</a>
      <a href="fpt.php"><i class="fa-solid fa-chart-line me-3"></i>HR</a>
       <a href="progress.php"><i class="fa-solid fa-signal me-3"></i>WELFARE</a><br>
      <a href="parmission.php"><i class="fa-solid fa-person-walking me-3"></i>STUDENTINFO</a><br>
      
     
      
    </div>
    </div>
    
      </div>
      
    </div>
  </div>
 <div id="main">
        <span class="openbtn" onclick="toggleNav()">&#9776; Menu</span>
      
    </div>
    
  
</div>
<script type="text/javascript">
         
function toggleNav() {
    var sidebar = document.getElementById("sidebar");
    var main = document.getElementById("main");
    if (sidebar.style.width === "250px") {
        sidebar.style.width = "0";
        main.style.marginLeft = "0";
    } else {
        sidebar.style.width = "250px";
        main.style.marginLeft = "250px";
    }
}
let slideIndex = 0;

function showSlides() {
    const slides = document.querySelectorAll('.slide');
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = 'none';  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    slides[slideIndex-1].style.display = 'block';  
    setTimeout(showSlides, 3000); // Change image every 3 seconds
}

showSlides();

      </script>

    <div class="text alert alert-success">
      <h3>MENU DETAILS</h3>
      <p>1. FPT this panel allow student to submit details of fpt letter and report obtain from campaign after submit</p>
      <p>2. ASSIGNMENT PANEL this is panel in student page which allow student to send assignmet to lecturer without reach in staff send automatically and lecturer receive student assifnment</p>
      <p>3. PERMISSION PANEL this is panel allow student to send permission </p>
      <P>4. ASSIGNMENT PNEL this is panel allow student to send assignment to instructor and get marks within in this panel</P>
      <p>5. PAYMENT SYSTEM this panel allow student to views payment report and to get control number for payment process </p>
    </div>
</body>
</html>