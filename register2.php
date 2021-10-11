<?php
extract($_POST); 

include("db.php");

$sql="SELECT * FROM task where email='$email'";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0)
{
    $row = mysqli_fetch_assoc($res);
    if($email==isset($row['email']))
    {
            echo "email already exists";
            exit;

    }
}else{
        $password = $_POST['password'];
        $hash = password_hash($password, PASSWORD_DEFAULT); 
        $query="INSERT INTO task(name,email,password) VALUES ( '$name', '$email','$hash')";
        $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query"); 
        //if else condition to handle error vs success redirection.
        header ("Location:login.php?status=success");
        
}
    
        

?>