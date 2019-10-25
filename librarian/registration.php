<?php
    include('connection.php');
    if(isset($_POST['submit1'])){
      $tm=md5(time());
      $fnm=$_FILES['photo']['name'];
      $dst="books_image/".$tm.$fnm;
      $dst1=$tm.$fnm;
      move_uploaded_file($_FILES['photo']['tmp_name'],$dst);
      mysqli_query($link,"insert into librarian_registration values('','$_POST[firstname]','$_POST[lastname]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[contact]','$dst1')");
      header('location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Student Registration Form | LMS</title>

  

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
		<center><h1>Library Management System</h1></center>
      <form class="form-login" action="" method="post" enctype="multipart/form-data">
        <h2 class="form-login-heading">Librarian Registration Form</h2>
        <div class="login-wrap">
          <input type="text" class="form-control" placeholder="First Name" name="firstname" required autofocus>
          <br>
          <input type="text" class="form-control" placeholder="Last Name" name="lastname" required>
		  <br>
		  <input type="text" class="form-control" placeholder="UserName" name="username" required>
          <br>
          <input type="password" class="form-control" placeholder="Password" name="password" required>
		  <br>
		  <input type="text" class="form-control" placeholder="email" name="email" required>
          <br>
          <input type="text" class="form-control" placeholder="contact" name="contact" required>
		  <br>
          <input type="file" class="form-control" name="photo" required>
          <br>
          <button class="btn btn-theme btn-block" type="submit" name="submit1">Register</button>
          <hr>
          <div class="registration">
                    I have already an account.<br/>
                    <a class="" href="index.php">
                        Login Form
                    </a>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
</body>

</html>
