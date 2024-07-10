<!DOCTYPE html>
<html>
<head>
	<title>STUDENT REGISTRATION FORM </title>
</head>
<body>
  <script src="chaz.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.css" />
  
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
	<style>
		table{
			border-collapse: collapse;
			width: 100%;
		}
		table, th,td{
			border: 2px solid blue;
		}
		th,td{
			padding: 8px;
			text-align: left;
		}
		th{
			background-color: #f2f2f2;
		}
	</style>
  <table>
  	<thead>
  		<tr>
  			<th>studentName</th>
  			<th>date_of_birth</th>
  			<th>sponsor</th>
  			<th>nida</th>
  			<th>gender</th>
  			<th>nationality</th>
  			<th>course</th>
  			<th>education_level</th>
  		</tr>
  		<?php
   include 'connection.php';
    $query="SELECT*FROM regs";
    $execute=mysqli_query($con,$query)
       
       ?>
       <tbody>
       <?php

       while ($data=mysqli_fetch_array($execute))
       {

       	echo '<td>'.$data['studentName'].'</td>';
       	echo "<td>".$data['date_of_birth']."</td>";
       	echo "<td>".$data['sponsor']."</td>";
       	echo "<td>".$data['nida']."</td>";
       	echo "<td>".$data['gender']."</td>";
       	echo "<td>".$data['nationality']."</td>";
       	echo "<td>".$data['course']."</td>";
       	echo "<td>".$data['education_level']."</td>";
       	echo "</tr></tbody></tr>";

       }
  	
  

?>
    
</table>




    ?>
</body>
</html>