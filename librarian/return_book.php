<?php
	include('connection.php');
	include('header.php');
	include('menu.php');
?>
    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3>Return Books</h3>
        <div class="row mt">
            <div class="col-lg-6 col-md-6 col-sm-6">
            <form class="contact-form php-mail-form" action="" method="post">
              <div class="form-group">
				<select name="erm" class="form-control" selectionpicker>
						<option>--Choose enrollment--</option>
					<?php 
						$res=mysqli_query($link,"select distinct student_enrollment from issue_books where books_return_date=''");
						while($row=mysqli_fetch_assoc($res)):
					?>
						<option value="<?php echo $row['student_enrollment']; ?>"><?php echo $row['student_enrollment']; ?></option>
					<?php
						endwhile;
					?>
				</select>
				<br>
                <button type="submit" class="btn btn-primary" name="submit1">search</button>
              </div>
			 </form>
			</div>
			 <?php
				if(isset($_POST['submit1'])){
					$res=mysqli_query($link,"select * from issue_books where student_enrollment='$_POST[erm]' && books_return_date=''");
			?>
			<div class="col-lg-12">
					<div class="content-panel">
						<table class="table table-striped table-advance table-hover">
						<thead>
							<tr>
							<th>Student Enrollment No</th>
							<th>Student Name</th>
							<th>Student Contact</th>
							<th>Student Email</th>
							<th>Books Name</th>
							<th>Books issue date</th>
                            <th>To Return Books</th>
							<th>Return Books</th>
							</tr>
						</thead>
			<?php
					while($row=mysqli_fetch_array($res)){
			?>
						<tbody>
							<tr>
							<td><?php echo $row['student_enrollment']; ?></td>
							<td><?php echo $row['student_name']; ?></td>
							<td><?php echo $row['student_contact']; ?></td>
							<td><?php echo $row['student_email']; ?></td>
							<td><?php echo $row['books_name']; ?></td>
							<td><?php echo $row['books_issue_date']; ?></td>
							<td><?php echo $row['to_return_date']; ?></td>
							<td><a class="btn btn-primary btn-xs" href="return.php?id=<?php echo $row['id']; ?>">Return Books</a></td>
							</tr>
						</tbody>
			<?php
					}
				}
			 ?>
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
