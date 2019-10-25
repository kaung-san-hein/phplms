<?php
	include('header.php');
	include('menu.php');
	include('connection.php');
?>
    <section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-12">
			<div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4>Search Books</h4>
				
				<form action="" method="post">
					<input type="text" name="bookname" class="form-control" placeholder="enter books name">
					<br>
					<button type="submit" class="btn btn-primary" name="submit1">search</button>
				</form>
				
                <hr>
				<tbody>
					<?php
					if(isset($_POST['submit1'])){
						$res=mysqli_query($link,"select * from add_books where books_name like ('%$_POST[bookname]%')");
					}
					else{
						$res=mysqli_query($link,"select * from add_books");
					}
						$i=0;
						echo "<tr>";
						while($row=mysqli_fetch_array($res)){
							$i=$i+1;
							echo "<td>";
					?><img src="../librarian/books_image/<?php echo $row['books_image']; ?>" width="100" height="100">
					<?php
							echo "<br>";
							echo "<b>".$row['books_name']."</b>";
							echo "<br>";
							echo "<b>"."available:".$row['available_qty']."</b>";
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
        </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <?php
		include('footer.php');
	?>
