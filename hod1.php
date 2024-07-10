echo "<td>". $data['gender']."</td>";
                                        
<!DOCTYPE html>
<html>
<head>
    <link href="DataTables/datatables(13).min.css" rel="stylesheet">
 

</head>
<body>
<script src="DataTables/datatables(13).min.js"></script>
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
include 'connection.php';
$query="SELECT fullname,email,gender,role FROM reof where role='HOD'";
$execute=mysqli_query($con,$query)
?>
<table id="mytable"class="display">
    <thead>
            <tr>
                <th>FULLNAME</th>
                <th>EMAIL</th>
                <th>GENDER</th>
               
                <th>ROLE</th>
                
            </tr>
            </thead>
            <tbody>
                <?php
                    while ($data=mysqli_fetch_array($execute)) {
                    echo "<td>". $data['fullname']."</td>";
                    echo "<td>". $data['email']."</td>";
                    echo "<td>". $data['gender']."</td>";
                    
                     echo "<td>". $data['role']."</td>";
                      echo "</tr></td></tbody>";
                   
                   
                    }


                ?>



            
</table>

























</html>
