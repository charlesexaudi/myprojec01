<!DOCTYPE html>
<html>
<head>
	<link href="DataTables/datatables(13).min.css" rel="stylesheet">
 

</head>
<body>
    <td colspan="4"height="60px"><h1 style="color:green"><b><big><center><strong>HUMAN RESOURSE MANAGEMENT PAGE</h1></center></strong></big></b></td>
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
        p{
            color: green;
        }
        .email{
            color: blue;
        }
        h1{
            color: blue;

        }
        .hed{
            height: 40px;
            width: 200px;
            color: green;
        }
    </style>
<?php
include 'connection.php';
$query="SELECT*FROM HR1";
$execute=mysqli_query($con,$query)
?>
<?php
while($data=mysqli_fetch_array($execute))
{

?>
<table id="mytable"class="display">
	<thead>
    		<tr>
    			<th>NAME</th>
    			<th>EMAIL</th>
    			<th>AGE</th>
    			<th>NUMBER</th>
    			<th>DATE</th>
    			<th>MONTH</th>
                <th>POSITION</th>
    	
    		</tr>
    		</thead>
    		<tbody>
    			<?php
                    while ($data=mysqli_fetch_array($execute)) {
                    echo "<td>". $data['ename']."</td>";
                    echo "<td>". $data['email']."</td>";
                    echo "<td>". $data['Eage']."</td>";
                    echo "<td>". $data['enum']."</td>";
                    echo "<td>". $data['date']."</td>";
                     echo "<td>". $data['month']."</td>";
                     echo "<td>". $data['position']."</td>";
                     
                     
                      echo "</tr></td></tbody>";
                   
                   
                    }
        }


    			?>



    		
</table>
<div>
    <p>1.if there any wrong data you should communicate with HR immediate before end of month</p>
<p>2.if you have any opinion,or any problem you need to send to HR you should use email of HR 
    <i class="email"><a href="mwangacharles@gmail.com">mwangacharles@gmail.com</a></i><i> OR tell<i class="email"><b> +255672703693</i></b>
</p>

</div>






















</html>