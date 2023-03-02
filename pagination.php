<?php
include('connect.php');
$limit = 200;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  
$sql = "SELECT * FROM sign_up ORDER BY name ASC LIMIT $start_from, $limit";  
$rs_result = mysqli_query($conn, $sql);  
?>
<table id="myTable" class="table table-bordered thead-dark">  
<thead>  
<tr>  
<th>id</th>  
<th>name</th>
<th>date</th>
<th>gender</th> 
<th>email</th>  
<th>phone_no</th>
<th>password</th>
<th>cpassword</th>
<th>file</th>
</tr>  
</thead>  
<tbody>  
<?php  
while ($row = mysqli_fetch_array($rs_result)) {  
?>  
            <tr>  
            <td><?php echo $row["id"]; ?></td>  
            <td><?php echo $row["name"]; ?></td>  
            <td><?php echo $row["date"]; ?></td> 
            <td><?php echo $row["gender"]; ?></td> 
            <td><?php echo $row["email"]; ?></td> 
            <td><?php echo $row["phone_no"]; ?></td> 
            <td><?php echo $row["password"]; ?></td> 
            <td><?php echo $row["cpassword"]; ?></td> 
            <td><?php echo $row["file"]; ?></td> 

            </tr>  
<?php  
};  
?>  
<script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>
</tbody>  
</table>  