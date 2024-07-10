<!DOCTYPE html>
<html>
<head>
	<link href="DataTables/datatables(13).min.css" rel="stylesheet">
 

</head>
<body>
<script src="DataTables/datatables(13).min.js"></script>
<script src="chaz.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.css" />
  <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
</body>
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
<?php
$con=mysqli_connect('localhost','root','','projschool');
$query="SELECT*FROM reof";
$execute=mysqli_query($con,$query)
?>
<?php
while($info=$results->fetch_assoc())
{

?>
<table id="mytable"class="display">
	<thead>
    		<tr>
    			<th>FULLNAME</th>
    			<th>EMAIL</th>
    			<th>GENDER</th>
    			<th>USERNAME</th>
    			<th>PASSWORD</th>
    			<th>ROLE</th>
                <th>DELETE</th>
    	
    		</tr>
    		</thead>
    		<tbody>
    			<?php
                    while ($data=mysqli_fetch_array($execute)) {
                    echo "<td>". $data['fullname']."</td>";
                    echo "<td>". $data['email']."</td>";
                    echo "<td>". $data['gender']."</td>";
                    echo "<td>". $data['username']."</td>";
                    echo "<td>". $data['password']."</td>";
                     echo "<td>". $data['role']."</td>";
                     
                     
                      echo "</tr></td></tbody>";
                   
                   
                    }


    			?>



    		
</table>
























?>
</html>