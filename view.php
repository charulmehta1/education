<?php 
session_start();
?>
<style>
a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.next {
  background-color: #04AA6D;
  color: white;
}


</style>
<head>
<link rel="stylesheet" href="style.css">
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<center>
 
<table  class="table" border=1  cellpadding='10'>
<thead>
<tr>
<th>SL No</th>
<th>Education</th>
<th>state</th>
<th>city</th>
</tr>
</thead>
<tbody>
<?php 
include_once("db.php");
$taskId =  $_GET['id'];
$viewquery = "SELECT subject.subject_name, task.state,task.city FROM task, subject where subject.task_id=task.id and task.id='$taskId'";


//$qsl = "select name, Dob, city, state from registration, customer where customer.reg_id=registration.id and reg_id=$reg_id";
//$rs = mysqli_query($conn,$qsl); // fetch data
$result = mysqli_query($conn,$viewquery);
if ($result->num_rows > 0) {
$i=1;
while($row = $result->fetch_assoc())
{ 

?>
<tr>
<td><?php echo $i++;?></td>
<td><?php echo $row['subject_name'];?> </td>
<td><?php echo $row['state'];?> </td>
<td><?php echo $row['city'];?> </td>


<!-- <td> <a href='update.php?id=<?php echo $row['id']; ?>'>edit</a></td> -->
</tr>
<?php 
} } ?>
</tbody>
</table>
</div>
<center>
<a href="details.php?id=<?php echo $_GET['id']; ?>" class="next">Next &raquo;</a></center>
<?php 
// if(isset($_POST['id'])){
//    $id=  $_POST['id'];

//    $sql = "DELETE FROM task WHERE id=".$id;
//    mysqli_query($conn,$sql);
//    echo 1;
//    exit;
// }
// exit;
?>
<a href="logout.php"><h2><font color="red">Logout</font></h2></a>