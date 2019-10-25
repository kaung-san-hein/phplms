<?php
	include('connection.php');
	$res5=mysqli_query($link,"select * from student_registration where username='$_SESSION[username]'");
  $name="";
  $image="";
	while($row5=mysqli_fetch_array($res5)){
    $name=$row5['username'];
    $image=$row5['image'];
	}
?>
<!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="students_image/<?php echo $image; ?>" class="img-circle" width="80"></a></p>
          <h5 class="centered"><?php echo $name; ?></h5>
          <li class="mt"><a href="my_issued_book.php">My issued books</a></li>
		  <li class="mt"><a href="search_books.php">Search books</a></li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->