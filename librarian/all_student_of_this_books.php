<?php
	include('header.php');
	include('menu.php');
	include('connection.php');
?>
    <section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-12">
            <?php
				$res=mysqli_query($link,"select * from issue_books where books_name='$_GET[book_name]' && books_return_date=''");
			?>
			<div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4>Student List with this books</h4>
                <hr>
                <thead>
                  <tr>
                    <th>student name</th>
                    <th>student enrollment</th>
                    <th>books name</th>
					<th>student email</th>
					<th>studnet contact</th>
					<th>student books issue date</th>
					<th>To Return Books</th>
                  </tr>
                </thead>
				<?php while($row=mysqli_fetch_assoc($res)): ?>
                <tbody>
                  <tr>
                    <td><?php echo $row['student_name']; ?></td>
					<td><?php echo $row['student_enrollment']; ?></td>
					<td><?php echo $row['books_name']; ?></td>
					<td><?php echo $row['student_email']; ?></td>
					<td><?php echo $row['student_contact']; ?></td>
					<td><?php echo $row['books_issue_date']; ?></td>
					<td><?php echo $row['to_return_date']; ?></td>
				  </tr>
                </tbody>
				<?php endwhile; ?>
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
