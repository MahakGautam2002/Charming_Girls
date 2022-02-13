<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Hi, <span>Admin</span></h3>
      <h1>Welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>This is an admin page</p>
      <a href="index.html" class="btn">Home Page</main></a>
      <a href="file.php" class="btn">Documents</main></a>
      
      <a href="logout.php" class="btn">logout</a>
     
   </div>

</div>
<footer>
        <div class="footer_logo">
            <a href="home.html"><img src="logo.png"  width="80"></a>
        </div>
        <div class="pages">
            <h3>Pages</h3>
            <a href="home.html">Home</a>|
            <a href="about.html">About Us</a>|
            <a href="documents.php">Documents</a>|
            <a href="doctors.html">Doctors</a>|
            <a href="login.php">Login/Register</a>
        </div>
      
        <hr>
        <p>Copyright &copy; 2022 HEALTH TALKS All right reserved</p>
    </footer>
</body>
</html>