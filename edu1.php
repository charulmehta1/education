<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<style>
.form-box {
    border: 1px solid #c1c1c1;
    color: #5cb55c;
}

.input-group {
    position: relative;
    display: table;
    width: 100%;
    border-collapse: separate;
}

a {
    text-decoration: none;
    display: inline-block;
    padding: 8px 16px;
}

a:hover {
    background-color: #ddd;
    color: black;
}

.previous {
    background-color: #f1f1f1;
    color: black;
}
</style>

<head>
    <script src="js/cities.js"></script>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6 col-sm-6 col-xs-12 form-box">
                <h1 class="text-center">Detail Form</h1>
                <hr>
                <form class="form-horizontal" role="form" action="#" method="post">
                    
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3" for="education">Education</label>
                        <div class="col-md-8 col-sm-8 col-xs-8">
                            <div class="input-group control-group after-add-more">
                                <input type="text" name="addmore[]" id="education" class="form-control"
                                    placeholder="Enter subjects">
                                <div class="input-group-btn">
                                    <button class="btn btn-success add-more" type="button"><i
                                            class="glyphicon glyphicon-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="copy hide">
                        <div class="control-group input-group" style="margin-top:10px">
                            <input type="text" name="addmore[]" class="form-control" placeholder="Enter Other Subject">
                            <div class="input-group-btn">
                                <button class="btn btn-danger remove" type="button"><i
                                        class="glyphicon glyphicon-remove"></i></button>
                            </div>
                        </div>
                    </div> 
                    <br>

                    <div class="col-md-6 mt-10">
                        <select onchange="print_city('city', this.selectedIndex);" id="state" name="state"
                            class="control-group input-group"></select>
                    </div>
                    <div class="col-md-6 mt-10">
                        <select class="control-group input-group" name="city" id="city" value=""></select>
                    </div>
                    <br>
                    <br>
                    <hr>
                    <div class="form-group">
                        <div
                            class="col-md-6 col-sm-6 col-xs-6 col-md-offset-3 col-sm-offset-3 col-xs-offset-3 text-center">
                            <button type="submit" class="btn btn-success btn-block submit"
                                name="submit">Submit</button><br>
                            <a href="login.php" class="previous">&laquo; Previous</a>
                        </div>
                </form>
            </div>
        </div>
    </div>
</body>


<?php
include "db.php";
if(isset($_POST["submit"]))
{  
    $taskId = $_GET['id'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    $query ="update task set state='$state', city='$city' where id='$taskId'";
    $sql=mysqli_query($conn,$query) or die("could not perform the query");



   // print_r($_POST['addmore']);
    
    for($i=0; $i<(sizeof($_POST['addmore'])); $i++){
        if($_POST['addmore'][$i] != ''){
            $education=$_POST['addmore'][$i];

            $qsl="INSERT INTO subject(task_id, subject_name) VALUES ('$taskId', '$education')"; 
            $sql=mysqli_query($conn,$qsl)or die("Could Not Perform the Query");
        }
    //echo $education;
    }
    header("location:view.php?id=$taskId");
}
?>

<script>
$(document).ready(function() {
    print_state('state');
});
$(".add-more").click(function() {
        var html = $(".copy").html();
        $(".after-add-more").after(html);
    });
$("body").on("click", ".remove", function() {
    $(this).parents(".control-group").remove();
});
</script>

</html>