<!DOCTYPE html>
<html>
<head>
  <title>student page</title>
</head>
<body>
  <style>
    h1{
      color: blue;
      align-content: center;
    }
    *{
      align-content: center;
      padding-right: 50px;
      padding-left: 80px

    }
  form{
    padding-top: 7px;
    padding-bottom: 5px;
    height: 63px;
      width: 90px;
  }
  .input{
    height: 30px;
    width: 300px;

  }
  
</style>
<div>
  <form action="#" method="POST">
    <h1>STUDENTS REGISTRATION PANEL</h1>
    <p>
      <input type="text" name="instructor" class="input" placeholder="STUDENTNAME">
    </p>
    <p>
      <input type="text" name="course" class="input" placeholder="COURSE">
    </p>
    <p>
      <input type="text" name="dept"class="input"  placeholder="DEPERTMENT">
    </p>
    <p>
      <input type="text" name="faculty"class="input"  placeholder="FACULTY">
    </p>
    <p>
      <input type="text" name="C1" class="input" placeholder="COURSE 1 AND YEAR">
    </p>
    <p>
      <input type="text" name="C2" class="input" placeholder="COURSE 2 AND YEAR">
    </p>
    <p>
      <input type="text" name="C3" class="input" placeholder="COURSE 3 AND YEAR">
    </p>
    <p>
      <input type="text" name="C4" class="input" placeholder="COURSE 4 AND YEAR">
    </p>
    <p>
      <input type="text" name="regno" class="input" placeholder="STATT REG NUMBER">
    </p>
    <p>
      <input type="email" name="email" class="input" placeholder="EMAIL">
    </p>
   <select name="position">
  <option>.........STAFF POSITION...........</option>
  <option value="DOF SN LECT">DOF SN LECT</option>
  <option value="HOD LECT">HOD LECT</option>
  <option value="DC">DC</option>
  <option value="ASS LECT">ASS LECT</option>
  <option value="TOASS">TOASS</option>
</select><br><br>
<p>
      <input type="text" name="ID" class="input" placeholder="ID">
    </p>
    <input type="submit" name="submit"value="SUBMIT">
  </form>
</div>


<?php
  $instructor="";
  $course="";
  $dept="";
  $faculty="";
  $C1="";
  $C2="";
  $C3="";
   $C4="";
  $regno="";
  $email="";
  $position="";
  $ID="";
   include 'connection.php';
   if ($con) {
     
 
    if (isset($_POST['submit'])) {
      if (isset($_POST['instructor'])) {
       $instructor=$_POST['instructor'];
      }
      $course="";
       if (isset($_POST['course'])) {
      $course=$_POST['course'];
    }
    $dept="";
    if (isset($_POST['dept'])) {
      $dept=$_POST['dept'];
    }
    $faculty="";
    if (isset($_POST['faculty'])){
      $faculty=$_POST['faculty'];
    }
    $C1="";
   if (isset($_POST['C1'])){
      $C1=$_POST['C1'];
    }
    $C2="";
   if (isset($_POST['C2'])){
      $C2=$_POST['C2'];
    }
    $C3="";
   if (isset($_POST['C3'])){
      $C3=$_POST['C3'];
    }
    $C4="";
   if (isset($_POST['C4'])){
      $C4=$_POST['C4'];
    }
    $regno="";
   if (isset($_POST['regno'])){
      $regno=$_POST['regno'];
    }
    $email="";
   if (isset($_POST['email'])){
      $email=$_POST['email'];
    }
   $position="";
   if (isset($_POST['position'])){
      $position=$_POST['position'];
    }
    $ID="";
   if (isset($_POST['ID'])){
      $ID=$_POST['ID'];
    }

  $query="INSERT INTO instructor(instructor,course,dept,faculty,C1,C2,C3,C4,regno,email,position,ID) VALUES('$instructor','$course','$dept','$faculty','$C1','$C2','$C3','$C4','$regno','$email','$position','$ID')";
   $execute=mysqli_query($con,$query);
  }
}

  
  ?>





</body>
</html>