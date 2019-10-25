<?php
	include('connection.php');
	$res5=mysqli_query($link,"select * from librarian_registration where username='$_SESSION[librarian]'");
	$name="";
	$image="";
	while($row5=mysqli_fetch_array($res5)){
		$name=$row5['username'];
		$image=$row5['image'];
	}
?>
<!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="#"><img src="books_image/<?php echo $image; ?>" class="img-circle" width="80"></a></p>
          <h5 class="centered"><?php echo $name; ?></h5>
          <li class="mt"><a href="display_student_info.php">All Student Info</a></li>
		  <li class="mt"><a href="add_book.php">Add books</a></li>
		  <li class="mt"><a href="display_book.php">Display books</a></li>
		  <li class="mt"><a href="issue_book.php">Issue books</a></li>
		  <li class="mt"><a href="return_book.php">Return books</a></li>
		  <li class="mt"><a href="books_details_with_student.php">Books Details with students</a></li>
		  <li class="mt"><a href="sent_notification.php">sent notification</a></li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->