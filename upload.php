<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["imageUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }





}?>
====================================================
<?php
 $filename = $_FILES["imageUpload"]["name"];
$tempname = $_FILES["imageUpload"]["tmp_name"];
$folder="uploads/".$filename;
move_uploaded_file($tempname,$folder);
echo $folder;




?>







