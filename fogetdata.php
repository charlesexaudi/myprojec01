<!DOCTYPE html>
<html>
<head>
	<title>UPDATE PASSWORD</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <script src="js/bootstrap.bundle.min.js"></script>
  
		<style>
             form{
                align-content: center;
             }  
             .form_login{
    
  width: 900px;
  margin: auto;
  border size: 2px;
  border: 20px;
  margin-top: 100px;
  margin-right: 100px;
  border-spacing: 3px;
  padding-left: 

}
.form_tittle{

}
label{
  font-size: 30px;
  color: black
}
.label_login{
  padding: 20px;
  border-radius: 5px;
  margin-top: 1px;
  margin-bottom: 0px;
   width: 350px;
  height:12px;
  font-size: 30px;
}
h1{
  padding-top: 10px;
  padding-bottom: 20px;
  
  background-color: blue;
width: 450px;
  height:50px;
  font-size: 20px;
  color: white;
}   
.login{
  color: white;
  background-color: blue;
   width: 160px;
  height:60px;
  border-radius: 10px;
  font-size: 30px;
}

.it{
  padding-top: 10px;
  padding-bottom: 20px;
  background-color: green;
width: 450px;
  height:30px;
  font-size: 20px;
  color: white;
} 
.label_login{
  padding: 30px;
  margin: 5px;
  border-radius: 25px;
}  
        </style>
        <center>
         <div class="form_login">
     <h1>CHANGE PASSWORD AND USERNAME</h1>
     <div id="error"></div>
     
     <?php 

     include 'connection.php';
     if($con)
   {
    $id="";
    if(isset($_GET['id']))
    {
      $id=$_GET['ID'];
    }
   
     $sql="SELECT * FROM reg WHERE email='$id'";
   $execute=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($execute)>0)
    {
      if($row=mysqli_fetch_assoc($execute))
      {
       
       echo'<input type="text" value=" '.$row['Regno'].'"?> name="Regno" >';
       echo'<input type="text" value=" '.$row["Name"].'" name="Name" >';'<br>'
      echo'<input type="text" value="'.$row["email"].' " name="email">';'<br>'
       echo'<input type="text"value=" '.$row["Tell"].' " name="Tell">';'<br>'
        echo'<input type="text"value=" '.$row["Gender"].' " name="Gender">';'<br>'
       echo'<input type="text"value=" '.$row["Nationality"].' " name="Nationality">';'<br>'
        echo'<input type="text"value=" '.$row["NIDA"].' " name="NIDA">';'<br>'
      echo'<input type="text"value=" '.$row["password"].' " name="password">';'<br>'
       echo'<input type="text"value=" '.$row["Role"].' " name="Role">';'<br>'
 ?>

   
   
  <?php
  if(isset($_POST['update']))
  {

   $fullname="";
    if(isset($_POST['fullname']))
    {
      $fullname=$_POST['fullname'];
    }
    $email="";
    if(isset($_POST['email']))
    {
      $email=$_POST['email'];
    }
    $gender="";
    if(isset($_POST['gender']))
    {
      $gender=$_POST['gender'];
    }
    $username="";
    if(isset($_POST['username']))
    {
      $username=$_POST['username'];
    }
     $password="";
    if(isset($_POST['password']))
    {
      $password=$_POST['password'];
    }
     $role="";
    if(isset($_POST['role']))
    {
      $role=$_POST['role'];
    }
    $sql="SELECT fullname FROM reg WHERE email='$id' AND fullname='$fullname',email='$email',gender='$gender',username='$username',password='$password',role='$role'";
    $getData=mysqli_query($con,$sql);
    if(mysqli_num_rows($getData)>0)
    {
      echo"enter data ";
    }else{
    $sql="UPDATE user SET fullname='$fullname',email='$email',gender='$gender',username='$username',password='$password',role='$role',ID='$ID'";
  }
  }
      }
    }
   }
   ?>
    

  
</body>
</html>