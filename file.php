<!DOCTYPE html>
<html>
<head>
    <title>Download PDF</title>
    <link rel="stylesheet" href="index.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <center>
    <div class="container">
        <fieldset style="margin: 0%;">
            <legend>Details</legend>
    <span  style="color:red;font-size: large;"> Upload image of your medical report/Prescription</span><br><br>
    <!-- <form action='upload.php' method='POST' enctype='multipart/form-data'>
        <input type='file' name='myfile'><br> <br>
        <input type='submit' name='upload' value='Upload'> <br><br>
    </form> -->
    <form action='file.php' method='POST' enctype='multipart/form-data'>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="abc@gmail.com">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    
                <!-- <input type='submit' name='upload' value='Upload'> <br><br> -->
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" aria-describedby="userHelp">
    
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="123****2">
        <div id="pwHelp" class="form-text">We'll never share your password with anyone else.</div>
    </div>

    <div class="mb-3">
        <label for="myfile" class="form-label">Document</label>
        <input type='file' name='myfile' id="myfile" aria-describedby="userHelp"><br> <br>
    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out : By checking this box you confirm that all the details uploaded by you are correct</label>
    </div>
        <button type="submit" class="btn btn-primary" name='upload' value='upload'>Upload</button>
    </form>
</fieldset>
</div>
</center>
        <!-- Changes -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    

</body>
</html>
<?php
error_reporting(0);
         
    $name=$_FILES['myfile']['name'];
    $tmp_name=$_FILES['myfile']['tmp_name'];
    if(move_uploaded_file($tmp_name,$name))
    {
        echo"File are uploaded";

        echo"<img src='$name' width 300 height=300>";

    }
    else{
        echo"File are not uploaded";
    }
?>