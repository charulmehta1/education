<?php
include_once "db.php";
    session_start();
    if(session_destroy()) { 
        // Redirecting To Home Page
      
        header("Location:login.php");
    }
?>