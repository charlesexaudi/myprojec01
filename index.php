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
<!DOCTYPE html>
<html>
<head>
	<title>machame collage management system</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<link rel="stylesheet" type="text/css" href="style.css">

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
  height: 60px;
  background-color: skyblue;

  
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
 margin-left: 150px;
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
  <style>
    .header-block {
      background-color: #007bff; /* Blue background color */
      color: #fff; /* White text color */
      padding: 15px; /* Padding around the content */
      text-align: center; 
      width:100%;/* Center align the text */
    }
    h1{
     font-size: 30px; 
    }
    h2{
      font-size: 25px;
    }
   h3{
    font-size: 20px;
   }
    .img2{
   border-radius: 100%;
  float: right;
  width: 150px;
  height: 150px;
  border-radius: 100px;
}
.img{
  border-radius: 100%;
  float: left;
  width: 150px;
  height: 150px;
  border-radius: 100px;
  font-size: 20px;
  border: none;
  border-collapse: none;
 
}
.pp{
 font-size: 12px;
}
.head{
  font-size: 30px;
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
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col xm-15">
        <div><img src="img/neme.jpg" class="img"><img src="img/logo.jpg" class="img2"></div><div class="head">
        <div class="header-block">
          <h1>THE REPUBLIC UNITED NATION OF TANZANIA</h1>
          <h2>THE MINISTRY OF EDUCATION AND TECHNOLOGY</p>
          <h3>MACHAME TECHNOLOGICAL COLLAGE</h3>
           <p class="pp">PO.BOX 334 MOSHI kilimanjaro, email machame@ac.tz</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and dependencies (jQuery, Popper.js) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<div class="content2">
  <nav>
   
      <a href="#">HOME</a>
      <a href="#">ABOUT</a>
      <a href="#">E-LERNING</a>
      <a href="login2.php" class="btn btn-success">CMC</a>
    

  </nav>
<div class="sidebar" id="sidebar">
        <a href="#" class="closebtn" onclick="toggleNav()">&times;</a>
        <a href="#" ><i class="fas fa-home me-3"></i> HOME</a><br>
      <a href="#"><i class="fa-solid fa-info me-3"></i>ABOUT</a><br>
      <a href="#"><i class="fa-solid fa-user-graduate me-3" ></i>E-LERNING</a><br>
      <a href="#"><i class="fa-solid fa-calendar-days me-3"></i>EVENT</a><br>
      <a href="#"><i class="fa-solid fa-book me-3"></i>MTC LIBRARY</a><br>
      <a href="#"><i class="fa-solid fa-calendar-check me-3"></i>ALMANAC</a><br>
      <a href="#"><i class="fa-solid fa-building-columns me-3"></i>COURSE</a><br>
      <button class="btn btn-success">CMS LOGIN</button>
    </div>
    
    <div id="main">
        <span class="openbtn" onclick="toggleNav()">&#9776; Menu</span>
      
    </div>
  
</div>
  <div class="marquee-container">
        <div class="marquee">
            <p>collage admission now is open your welcome to apply in certificate and diploma course , use your link available in footer or in slide bar, welcome to get better education with high quality</p>
        </div>
    </div>
   <img src="img/wanafunzi7.PNG">
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
   
       
            <script src="https://kit.fontawesome.com/a076d05399.js"></script>
 <p class="vision">VISION</p>
<P class="ppoint">To provide education with the knowledge needed in society to solve problems</P>
<P class="vision">MISSION OF MTC</P>
<p class="ppoint">1. Better education for the development and welfare of society</p>
<p class="ppoint">2. Providing solid skills to students who join our college</p>
<p class="ppoint">3. We raise students and prepare them to solve problems in society</p>
    <h2 class="mctcourse"><center>COURSES AVAILABLE IN MCT</h2></center>
   <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="img/tehamau.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">ICT programs</h5>
        <p class="card-text">MCT offer course of ICT in high qulity by provide student practical session make more awereness in information technology.</p>
      </div>
      <a href="ORSIapplication.php" class="btn btn-primary">APPLY NOW!!</a>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/afya.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">HEALTH PROGRAMS</h5>
        <p class="card-text">MCT offer health course in high quality ,student allowed to attend field practical trainging two times per year .</p>
      </div>
      <a href="ORSIapplication.php" class="btn btn-primary">APPLY NOW!!</a>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/sheria.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">SOCIALOGY PROGRAMS</h5>
        <p class="card-text">MTC offer course under faculty of socialogy like law, socialogy, human resourse managemanet ,collage prepare compitate graduate and problem solver  in society</p>
      </div>
        <a href="ORSIapplication.php" class="btn btn-primary">APPLY NOW!!</a>
      </div>
    </div>
  </div>
</div>
 <h2 class="mctcourse"><center>MTC EVENTS</h2></center>
 <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="img/viongozir.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">STAFF MEMBERS </h5>
        <p class="card-text"> Staff members enter to participate in graduation ceremony 2023 </p>
      </div>
     
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/mahaflimtc.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Graduators 2023</h5>
        <p class="card-text">Graduators 2023 whose take diploma of computer science celebrate ceremony of graduation</p>
      </div>
     
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/uongozik.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Dean of health faculty</h5>
        <p class="card-text">Dean of health faculty read 323 graduator who graduate different programs offered in MTC</p>
      </div>
     
    </div>
  </div>
</div>
<br><br>
<div class="card md-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img/chaz.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Prof Charles mwanga</h5>
        <p class="card-text">The principal of MTC college would like to welcome you to this website which provides all the information related to MTC college which is located in machame kilimanjaro, which offers various fields related to health, computer and community development at diploma and degree level</p>
        <p class="card-text"><small class="text-body-secondary">MTC principal </small></p>
      </div>
    </div>
  </div>
</div>
    <!-- Footer -->
<footer class="text-center text-lg-start bg-body-tertiary text-muted" style="background-color: blue;">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-xm-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Machame collage
          </h6>
          <p>
            your welcome to machame collage to get what you reserve,machame colage offer different course and create a compitate ,innovetive and creative citizen
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-xm-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
           <p>
            <a href="course.php" class="text-reset">course</a>
          </p>
          <p>
            <a href="almanac.php" class="text-reset">almanac</a>
          </p>
          <p>
            <a href="#!" class="text-reset">service</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-xm-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="course.php" class="text-reset">Moe</a>
          </p>
          <p>
            <a href="almanac.php" class="text-reset">NACTVET</a>
          </p>
          <p>
            <a href="#!" class="text-reset">HELBS</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-xm-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> PO BOX 224 MOSHI</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
           charlesmwanga09@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> +255672703693  ICT OFFICER</p>
          <p><i class="fas fa-print me-3"></i> +255645456567 DVC ARC</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © charles mwanga ICT officer:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">ICT office MCT</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
    
</body>
</html>
