<?php
 include 'db.php';
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST['submit']))
{ 
    extract($_POST);
    include 'db.php';

    // $filename = $_FILES["imageUpload"]["name"];
    // $tmp_name = $_FILES["imageUpload"]["tmp_name"];
    // $folder="uploads/".$filename;
    // move_uploaded_file($tmp_name,$folder);
    // echo $folder;$target_dir = "uploads/";
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["imageUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    $photo=basename( $_FILES["imageUpload"]["name"],".jpg"); // used to store the filename in a variable


     $sql = "INSERT INTO task (id, name, photo, mobile, address) VALUES ('$id', '$name', '$photo', '$mobile', '$address')";
    if(mysqli_query($conn, $sql)){
        $taskid = $conn->insert_id;
        header("location:edu1.php?id=$taskid");
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
 
}}


?>