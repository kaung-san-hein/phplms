<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('location:index.php');
		exit();
	}
	include('connection.php');
	$total=0;
	$res=mysqli_query($link,"select * from message where dusername='$_SESSION[username]' && read1='no'");
	$total=mysqli_num_rows($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Student Panel</title>

  

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
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>LMS<span>(CS)</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme"><?php echo $total; ?></span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have <?php echo $total; ?> new messages</p>
              </li>
			  <?php 
					$res2=mysqli_query($link,"select * from message where dusername='$_SESSION[username]' && read1='no' order by id desc limit 3");
					while($row2=mysqli_fetch_array($res2)){
			  ?>
              <li>
                <a href="message_from_librarian.php">
                  <span class="subject">
                  <span class="from"><?php echo $row2['susername']; ?></span>
                  <span class="time">Just now</span>
                  </span>
                  <span class="message">
                  <?php echo $row2['msg']; ?>
                  </span>
                  </a>
              </li>
			  <?php } ?>
              <li>
                <a onclick="window.location='message_from_librarian.php'">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="logout.php">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->