<?php
	include('header.php');
	include('menu.php');
	include('connection.php');
?>
    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3>Books With Details</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <table class="table table-striped table-advance table-hover">
				<tbody>
				<?php
						$i=0;
						echo "<tr>";
						$res=mysqli_query($link,"select * from add_books");
						while($row=mysqli_fetch_array($res)){
							$i=$i+1;
							echo "<td>";
					?><img src="../librarian/books_image/<?php echo $row['books_image']; ?>" width="100" height="100">
					<?php
							echo "<br>";
							echo "<b>".$row['books_name']."</b>";
							echo "<br>";
							echo "<b>"."Total Books:".$row['books_qty']."</b>";
							echo "<br>";
							echo "<b>"."available:".$row['available_qty']."</b>";
							echo "<br>";
					?>
							<a href="all_student_of_this_books.php?book_name=<?php echo $row['books_name']; ?>" style="color:red;">Student Record if this books</a>
					<?php
							echo "</td>";
							if($i==5){
								echo "</tr>";
								echo "<tr>";
								$i=0;
							}
						}
						echo "</tr>";
					?>
                </tbody>
              </table>
          </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <?php
		include('footer.php');
	?>
