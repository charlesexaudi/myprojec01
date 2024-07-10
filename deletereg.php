<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	 include ('connection.php');
    $Regno="";
    if (isset($_GET['Regno'])) {
    	$Regno=$_GET['Regno'];
   }
    $sql="DELETE FROM reg WHERE Regno='$Regno'";
    $results=mysqli_query($con,$sql);
    if ($results) {
      header("location:staff.php");
     echo"<script>Swal.fire({
          title: 'Success!',
          text: 'You have successfully logged in.',
          icon: 'success',
          
        });</script>";
    }else{
      echo "note executed";
    	echo "<script>
  Swal.fire({
          title: 'Warning!',
          text: 'Invalid username or password. Please try again.',
          icon: 'warning',
          confirmButtonText: 'OK'
        });</script>";
    }
   
    
    ?>
    <script src="http//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>