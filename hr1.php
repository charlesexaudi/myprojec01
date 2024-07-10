<!DOCTYPE html>
<html>
<head>
	<title>STAFF SALARY</title>
</head>
<body>
      <td colspan="4"height="60px"><h1 style="color: white"><b><big><center><strong>HUMAN RESOURSE MANAGEMENT PAGE</h1></center></strong></big></b></td>
	<div class="oform">
		<center>
                   <form action="#" method="post">
             <input type="text" class="input"name="ename"placeholder="Employee name"><br>
             <input type="email" class="input"name="email"placeholder="Employee email"><br>
             <input type="text" class="input"name="Eage"placeholder="Employee age"><br>
            <input type="number" class="input"name="enum"placeholder="phone number"><br>
             <input type="date" class="input"name="date"placeholder="date started work"><br>
             <input type="text" class="input"name="month"placeholder="month"><br>
             <input type="text" class="input"name="esalary"placeholder="Employee salary">
            <select class="input"name=position>
                  <option class="input">.......choose position....</option>
                  <option value="mainstaff">mainstaff</option>
                  <option value="lecturer">lecturer</option>
                  <option value="other Employee">other employee</option>

            </select> 
            <input type="submit" name="submit" class="login">         
            </center> 
       <style>
            *{
                  background-color: skyblue;
            }
      form{
            padding-top: 7px;
            padding-bottom: 5px;
            height: 63px;
          width: 90px;

      }
      .input{
            height: 55px;
            width: 550px;
            margin: 6px;
            box-shadow: black;
            border-radius: 10px;
            font-size: 28px;

      }
      .oform{
            margin-right: 50%;
      }
      .h1{
            color: blue;
            font-size: 34px;

      }
      .login{
            height: 50px;
            width: 200px;
            border-radius: 10px;
            color: white;
            cursor: pointer;
            font-size: 20px;
            background-color: blue;
      }
      
</style>

<?php
include 'connection.php';
if ($con) {
     if (isset($_POST['submit'])) {
      $submit=$_POST['submit'];
     }
     $ename="";
     if (isset($_POST['ename'])) {
      $ename=$_POST['ename'];
     }
     $email="";
     if (isset($_POST['email'])) {
      $email=$_POST['email'];
     }
     $Eage="";
     if (isset($_POST['Eage'])) {
      $Eage=$_POST['Eage'];
     }
     $enum="";
     if (isset($_POST['enum'])) {
      $enum=$_POST['enum'];
     }
     $date="";
     if (isset($_POST['date'])) {
      $date=$_POST['date'];
     }
     $month="";
     if (isset($_POST['month'])) {
      $month=$_POST['month'];
     }
     $esalary="";
     if (isset($_POST['esalary'])) {
      $esalary=$_POST['esalary'];
     }
     $position="";
     if (isset($_POST['position'])) {
      $position=$_POST['position'];
     }
     $sql="INSERT INTO HR1(ename,email,Eage,enum,date,month,esalary,position)VALUES('$ename','$email','$Eage','$enum','$date','$month','$esalary','$position')";
     $results=mysqli_query($con,$sql);
     if ($results) {
         echo "submited successfully";
     }
}else{
      echo "not connected";
}





?>
      </form>
	</div>
     
</body>
</html>