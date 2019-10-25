<?php
	include('connection.php');
	include('header.php');
	include('menu.php');
?>
    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3>Issue Books</h3>
        <div class="row mt">
          <div class="col-lg-12">
		  <div class="col-lg-6 col-md-6 col-sm-6">
            <form class="contact-form php-mail-form" action="" method="post">
              <div class="form-group">
				<select name="erm" class="form-control" selectionpicker>
						<option>--Choose enrollment--</option>
					<?php 
						$res=mysqli_query($link,"select enrollment from student_registration");
						while($row=mysqli_fetch_assoc($res)):
					?>
						<option value="<?php echo $row['enrollment']; ?>"><?php echo $row['enrollment']; ?></option>
					<?php
						endwhile;
					?>
				</select>
				<br>
                <button type="submit" class="btn btn-primary" name="submit1">search</button>
              </div>
			  <?php
				if(isset($_POST['submit1'])){

				    //to return date
                    $date=date_create();
                    date_add($date,date_interval_create_from_date_string("7 days"));
                    $toreturndate = date_format($date,"d-m-Y");


					$res2=mysqli_query($link,"select * from student_registration where enrollment='$_POST[erm]'");
					$row2=mysqli_fetch_array($res2);
			  ?>
					<div class="form-group">
						<input type="text" name="enrollment" class="form-control" value="<?php echo $row2['enrollment']; ?>" readonly required>
					</div>
					<div class="form-group">
						<input type="text" name="studentname" class="form-control" value="<?php echo $row2['firstname'].$row2['lastname']; ?>" required readonly>
					</div>
					<div class="form-group">
						<input type="text" name="studentsem" class="form-control" value="<?php echo $row2['sem']; ?>" readonly required>
					</div>
					<div class="form-group">
						<input type="text" name="studentcontact" class="form-control" value="<?php echo $row2['contact']; ?>" readonly required>
					</div>
					<div class="form-group">
						<input type="text" name="studentemail" class="form-control" value="<?php echo $row2['email']; ?>" readonly required>
					</div>
					<div class="form-group">
				<select name="booksname" class="form-control" selectionpicker>
					<?php 
						$res3=mysqli_query($link,"select books_name from add_books");
						while($row3=mysqli_fetch_assoc($res3)):
					?>
						<option value="<?php echo $row3['books_name']; ?>"><?php echo $row3['books_name']; ?></option>
					<?php
						endwhile;
					?>
				</select>
					</div>
					<div class="form-group">
						<input type="text" name="booksissuedate" class="form-control" value="<?php echo date("d-m-Y");  ?>" readonly required>
					</div>
                    <div class="form-group">
                        <input type="text" name="toreturndate" class="form-control" value="<?php echo $toreturndate;  ?>" readonly required>
                    </div>
					<div class="form-group">
						<input type="text" name="studentusername" class="form-control" value="<?php echo $row2['username'];  ?>" readonly required>
					</div>
					<div class="form-send">
						<button type="submit" class="btn btn-large btn-primary" name="submit2">issues books</button>
					</div>
			 <?php
				}
			  ?>
			</form>
			<?php
				if(isset($_POST['submit2'])){
					$res=mysqli_query($link,"select available_qty from add_books where books_name='$_POST[booksname]'");
					$qty="";
					while($row=mysqli_fetch_array($res)){
						$qty=$row['available_qty'];
					}
					if($qty<=0){
			?>
					<script type="text/javascript">
						alert("this books are not available in stock");
					</script>
			<?php
					}
					else{
						mysqli_query($link,"insert into issue_books values('','$_POST[enrollment]','$_POST[studentname]','$_POST[studentsem]','$_POST[studentcontact]','$_POST[studentemail]','$_POST[booksname]','$_POST[booksissuedate]','','$_POST[toreturndate]','$_POST[studentusername]')");
						mysqli_query($link,"update add_books set available_qty=available_qty-1 where books_name='$_POST[booksname]'");
			?>
					<script type="text/javascript">
						alert("books issued successfully");
						window.location.href=window.location.href;
					</script>
			<?php
					}
			}
			?>
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
