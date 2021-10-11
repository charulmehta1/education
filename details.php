<?php 
session_start();
include "db.php";
?>
<style>
body{
        margin: auto;
        padding: auto;
        width: 100%;
        height: 100%;
    }
    .main{
        padding: 20px;

    }
    .main-img{
        width: 100%;
        height: 100%;
    }
    .boxes{
        border:1px solid #ccc;
    }

</style>

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <?php
    $taskId =  $_GET['id'];
    //$viewquery = "SELECT subject.subject_name, task.state,task.city, task.photo, task.name, task.mobile, task.address FROM task, subject where subject.task_id=task.id and task.id='$taskId'";
    
    $viewquery = "SELECT state, city, photo, name, mobile, address FROM task where task.id='$taskId'";
    
  
    $result = mysqli_query($conn,$viewquery);
    $result1 = mysqli_fetch_array($result);

    //$sql="SELECT * FROM task ORDER BY id='$id'";
   // $result = mysqli_query($conn,$sql);

    ?>
    <div class="container">
        <div class="main">
            <div class="row">
                <div class="col-md-3">
                    <div class="boxes">
                    <div class="img">
                        
                    <img src="uploads/<?=$result1['photo']?>" class="main-img" />
                    <!-- <img src="<?php echo $result1['photo']; ?>" class="main-img" /> -->
                    </div>
                        </div>
                </div>
                <div class="col-md-9">
                    <div class="boxes">
                    <div class="form">
                    <div class="row">
                    <div class="col-md-3">

                    <label for="name">name:</label>
                  <p><?php echo $result1['name']; ?></p> 
                    </div>
                    <div class="col-md-3"> 
          <label for="mobile">Mobile NO:</label>
        <p><?php echo $result1['mobile']; ?></p>
</div>
<div class="col-md-3">
         <label for="address">Address:</label>
         <p><?php echo $result1['address']; ?></p>
</div>
</div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-bordered" >
  <thead>
    <tr>
      <th>#</th>
      <th>Education</th>
    </tr>
  </thead>
  <tbody>
        <?php 
         $query = "SELECT subject_name FROM subject where task_id='$taskId'";
    
  
         $resultSub = mysqli_query($conn,$query);
         //$resultSubArray = mysqli_fetch_array($resultSub);
     
         if ($resultSub->num_rows > 0) {
            $i=1;
            while($row = $resultSub->fetch_assoc())
            { 
            ?>
            <tr>
            <td><?php echo $i++;?></td>
            <td><?php echo $row['subject_name'];?> </td>
            <?php }}?>
        </tbody>
        
   
    </div>
            </table>
</body>
<center>
<a href="logout.php"><h2><font color="red">Logout</font></h2></a>
</center>
</html>

