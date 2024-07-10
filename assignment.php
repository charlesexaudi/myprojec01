<!DOCTYPE html>
<html>
<head>
	<title>STUDENT ASSIGNMENT</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<?php 
    include("connection.php");
    if ($con) {
        if (isset($_POST['submit'])) {
            $Regno="";
            if (isset($_POST['Regno'])) {
                $Regno=$_POST['Regno'];
            }
            $name="";
            if (isset($_POST['name'])) {
                $name=$_POST['name'];
            }
            $date1="";
            if (isset($_POST['date1'])) {
                $date1=$_POST['date1'];
            }
            $course="";
            if (isset($_POST['course'])) {
                $course=$_POST['course'];
            }
            $code="";
            if (isset($_POST['code'])) {
                $code=$_POST['code'];
            }
            $lecturer="";
            if (isset($_POST['lecturer'])) {
                $lecturer=$_POST['lecturer'];
            }
            $descr="";
            if (isset($_POST['descr'])) {
                $descr=$_POST['descr'];
            }
            
            $query="INSERT INTO ass(Regno,name,date1,course,code,lecturer,descr) VALUES('$Regno','$name','$date1','$course','$code','$lecturer','$descr')";
            $results=mysqli_query($con,$query);
            if($results){
             echo "no error";
            }else{
                echo "error";
            }

        }

    }
    ?>
<style type="text/css">
	body{
		margin-left: 10px;
	}
</style>
<body>
    <?php
    include("inlude/header.php");

    ?>
	<script src="js/bootstrap.bundle.min.js"></script>
    <h1><center>STUDENT ASSIGNMENT PAGE</center></h1>
    <br><br>
    <form action="#" method="POST" class="form-group" enctype="multipart/form-data">
    	<div class="form-group">
    		
    			<input type="text" class="form-control input-lg" name="Regno" placeholder="REG NO">
    		
    	</div>
    	<br>
    	<div class="form-group">
    		
    			<input type="text" class="form-control input-lg"name="name" placeholder="STUDENT NAME">
    		
    	</div>
    	<br>
    	<div class="form-group">
    		<div class="col-sm-6">
    			<input type="date" class="form-control input-sm" name="date1" placeholder="SUBMITTION DATE">
    		</div>
    	</div>
    	<br>
    		<div class="form-group">
    		
    			<input type="text" class="form-control input-lg" name="course" placeholder="COURSE NAME">
    		
    	</div>
    	<br>
    	<div class="form-group">
    		
    			<input type="text"class="form-control input-lg" name="code" placeholder="COURSE CODE">
    		
    	</div>
    	<br>
    	<div class="form-group">
    		
    			<input type="text"class="form-control input-lg" name="lecturer" placeholder="LECTURER NAME">
    		
    	</div>
    	<br>
    	<div class="form-group">
  <label for="comment">ASSIGNMENT DESCRIPTION </label>
  <textarea class="form-control" name="descr" rows="5" id="comment"></textarea>
</div>
<br>

    	<input type="submit" name="submit" class="btn btn-primary">
    </form>
    
</body>
</html>