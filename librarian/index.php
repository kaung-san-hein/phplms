<?php
session_start();
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Librarian Login Form | LMS</title>

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
        <form class="form-login" action="" method="post">
            <h2 class="form-login-heading">Librarian Login Form</h2>
            <div class="login-wrap">
                <input type="text" class="form-control" placeholder="Username" autofocus name="username" required>
                <br>
                <input type="password" class="form-control" placeholder="Password" name="password" required>
                <br>
                <button class="btn btn-theme btn-block" type="submit" name="submit1"><i class="fa fa-lock"></i>Login</button>
                <hr>
                <div class="registration">
                    Don't have an account yet?<br/>
                    <a class="" href="registration.php">
                        Create an account
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
if(isset($_POST['submit1'])){
    $count=0;
    $res=mysqli_query($link,"select * from librarian_registration where username='$_POST[username]' && password='$_POST[password]'");
    $count=mysqli_num_rows($res);
    if($count==0){
        ?>
        <div class="login-social-link centered">
            <p><strong>Invalid</strong> Username or Password</p>
        </div>
    <?php
    }
    else{
    $_SESSION['librarian']=$_POST['username'];
    ?>
        <script type="text/javascript">
            window.location='display_student_info.php';
        </script>
        <?php
    }
}
?>
<!-- js placed at the end of the document so the pages load faster -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<!--BACKSTRETCH-->
<!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
<script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
</body>

</html>
