<!DOCTYPE html>
<html>
<head>
	<title>assignmentview</title>
</head>
<body>
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
	<div class="card">
<div class="container fluid">
	<div class="col-md-12">
		<h1>INSTRUCTOR ASSIGNMENT VIEW</h1>
	</div>
</div>
<table>
	<thead>
		<tr>
			<th>STUDENT REG</th>
			<th>STUDENT NAME</th>
			<th>SUBMITTION DATE</th>
			<th>COURSE NAME</th>
			<th>COURSE CODE</th>
			<th>LECTURER NAME</th>
			<th>ASSIGNMENT DESCRIPTION </th>
		</tr>
	</thead>

<tbody>
		<?php
   include 'connection.php';
    $query="SELECT*FROM  ass";
    $execute=mysqli_query($con,$query)
       
       ?>
<?php
 while ($data=mysqli_fetch_array($execute))
       {

       	echo '<td>'.$data['Regno'].'</td>';
       	echo "<td>".$data['name']."</td>";
       	echo "<td>".$data['date1']."</td>";
       	echo "<td>".$data['course']."</td>";
       	echo "<td>".$data['code']."</td>";
       	echo "<td>".$data['lecturer']."</td>";
       	echo "<td>".$data['fileupload']."</td>";
       
       	echo "</tr></tbody></tr>";

       }
  	
  

?>
    
</table>








?>
</table>
</div>
</body>
</html>