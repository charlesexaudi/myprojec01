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
            $report="";
            if (isset($_POST['report'])) {
                $report=$_POST['report'];
            }
            $date2="";
            if (isset($_POST['date2'])) {
                $date2=$_POST['date2'];
            }
            $position="";
            if (isset($_POST['position'])) {
                $position=$_POST['position'];
            }
            $companyname="";
            if (isset($_POST['companyname'])) {
                $companyname=$_POST['companyname'];
            }
            
            $query="INSERT INTO fpt(Regno,name,date1,report,course,date2,position,companyname) VALUES('$Regno','$name','$date1','$report','$course','$date2','$position','$companyname')";
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
		margin-left: 60px;
	}
    i{
        color:green;
    }
</style>
<body>
    <script src="js/bootstrap.bundle.min.js"></script>
    <?php
    include("inlude/header.php");

    ?>
    <br>
	
    <h1><center>STUDENT FPT PAGE</center></h1>
    <P> Student should fill all requerement and submit <i>This document should be submitted direct to FPT cordinator and department supervisor</i></P>
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
                DATE YOUR WRITE LETTER:
    			<input type="date" class="form-control input-sm" name="date1" placeholder="SUBMITTION DATE">
    		</div>
    	</div>
    	<br>
    		<div class="form-group">
    		
    			<input type="text" class="form-control input-lg" name="course" placeholder="COURSE NAME">
    		
    	</div>
    	<br>
    	<div class="form-group">
    		
    			<input type="text"class="form-control input-lg" name="report" placeholder="REPORT">
    		
    	</div>
        <div class="form-group">
            <div class="col-sm-6">
                TO DAY DATE
                <input type="date" class="form-control input-sm" name="date2">
            </div>
        </div>
        <br>
    	<br>
    	<div class="form-group">
    		
    			<input type="text"class="form-control input-lg" name="position" placeholder="NAME OF COMPANY MANAGER">
    		
    	</div>
    	<br>
    	<div class="form-group">
            
                <input type="text"class="form-control input-lg" name="companyname" placeholder="NAME OF COMPANY">
            
        </div>
        <br>
    	<input type="submit" name="submit" class="btn btn-primary">
    </form>
   
</body>
</html>