<?php
	include('connection.php');
	include('header.php');
	include('menu.php');
?>
    <section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-12">
             <?php
				$res=mysqli_query($link,"select * from issue_books where student_user_name='$_SESSION[username]'");
			?>
			<div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4>My Issued Books</h4>
                <hr>
                <thead>
                  <tr>
                    <th>Student Enrollment No</th>
                    <th>Books Name</th>
                    <th>Books Issue Date</th>
					<th>To Return Date</th>
                  </tr>
                </thead>
				<?php while($row=mysqli_fetch_assoc($res)): ?>
                <tbody>
                  <tr>
                    <td><?php echo $row['student_enrollment']; ?></td>
					<td><?php echo $row['books_name']; ?></td>
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
