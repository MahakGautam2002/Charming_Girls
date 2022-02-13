<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Documents</title>
    <link rel="stylesheet" href="styling.css">
    <style>

        
        input{
            width: 50%;
            height: 5%;
            border: 1px;
            border-radius: 05px;
            padding: 8px 15px 8px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px grey;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <section>
    <center>
        <h1>Enter the details with essential Documents</h1>
        <div class="container">
        <fieldset>
            <legend>Details</legend>
        <form action="" method="POST" enctype="multipart/form-data">
            <label><strong>Upload the report</strong></label>
            <input type="file" name="image" id="image"/><br>

            <label><strong>username</strong></label>
            <input type="text" name="username" id="username" placeholder="Enter username"/><br>

            <label><strong>Password</strong></label>
            <input type="number" name="password" id="password" placeholder="123**98"/><br>

            
            <input type="submit" name="Upload" value="Upload report"/><br>
        </form>
    </div>
    </center>  
    </fieldset> 
    </section>
</body>
</html>

<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'patient details');


if(isset($_POST['Upload'])){

    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $username=$_POST['username'];
    $Password=$_POST['password'];

    $query="INSERT INTO `patient reports`(`image`,`username`,`password`) VALUES('$file','$username','$password)"; 
    $query_run=mysqli_query($connection,$query);

    if($query_run){

        echo '<script type="text/javascript">alert("Report Uploaded") </script>';
    }
    else{
        echo '<script type="text/javascript">alert("Report Not Uploaded") </script>';
    }

}












?>