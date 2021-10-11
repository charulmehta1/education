<?php  
include "db.php";
?>

<!DOCTYPE html>
<html lang="en">
<style>
.border-class
{
  border: black solid;
  margin:20px;
  padding:20px;
}
</style>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Welcome to education Portal</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assests/css/style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container" style="width:40%;padding-top: 90px;" >
<div class="signup-form">
<form class="border-class" action="login-process.php" method="post" enctype="multipart/form-data">
<p class="hint-text">Enter Details</p> 
      <div class="form-group">
        	Photo:<input type="file" class="form-control" name="imageUpload" id="imageUpload" required="required">
        </div>
        <div class="form-group">
        Name:<input type="text" class="form-control" name="name" id="name" required="required">
        	<!-- Name:<input pattern="[a-zA-Z]*" oninvalid="setCustomValidity('Please enter on alphabets only. ')" type="text" class="form-control" name="name" id="name" required="required"> -->
        </div>
        <!-- <div class="form-group">
        password: <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="required">
        </div> -->
        <div class="form-group">
        	Mobile No:<input maxlength="10" type="tel" class="form-control" name="mobile" id="mobile" required="required">
        </div>
		<div class="form-group">
            Address:<input type="text" class="form-control" name="address" id="address" required="required">
        </div>
	 <div class="form-group"><center>
            <button type="submit" name="submit" value="next" class="btn btn-success" onclick="return validate();">Next</button>
        </div> 
    </form>

     <?php
// if(isset($_GET['submit']))
// {
//     extract($_GET);
//     include 'db.php';

//     $sql = "INSERT INTO task (id, photo, name, mobile, address) VALUES ('$id','$photo', '$name', '$mobile', '$address')";
//     if(mysqli_query($conn, $sql)){
//         $taskid = $conn->insert_id;
//         header("location:edu1.php?id=$taskid");
//     } else{
//         echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
//     } 
// }

    //Process the image that is uploaded by the user

    // $target_dir = "uploads/";
    // $target_file = $target_dir.basename($_FILES["imageUpload"]["name"]);
    // $uploadOk = 1;
    // $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    // if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file)) {
    //     echo "The file ". basename( $_FILES["imageUpload"]["name"]). " has been uploaded.";
    // } else {
    //     echo "Sorry, there was an error uploading your file.";
    // }

    // $image=basename( $_FILES["imageUpload"]["name"],".jpg"); // used to store the filename in a variable

    ?>  
     <!-- }  -->
    <script>
        function validate(){
            return true;
        }
    </script>