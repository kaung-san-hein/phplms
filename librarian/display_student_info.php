<?php
	include('header.php');
	include('connection.php');
	include('menu.php');
?>
    <section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-12">
            <?php
				$res=mysqli_query($link,"select * from student_registration");
			?>
			<div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4>All Student Information</h4>
                <hr>
                <thead>
                  <tr>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>UserName</th>
					<th>Email</th>
					<th>Contact</th>
					<th>Sem</th>
					<th>Enrollment</th>
                    <th>Status</th>
                    <th>Approve</th>
					<th>Not Approve</th>
                  </tr>
                </thead>
				<?php while($row=mysqli_fetch_assoc($res)): ?>
                <tbody>
                  <tr>
                    <td><?php echo $row['firstname']; ?></td>
					<td><?php echo $row['lastname']; ?></td>
					<td><?php echo $row['username']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['contact']; ?></td>
					<td><?php echo $row['sem']; ?></td>
					<td><?php echo $row['enrollment']; ?></td>
                    <td><span class="label label-info label-mini"><?php echo $row['status']; ?></span></td>
                    <td><a class="btn btn-success btn-xs" href="approve.php?id=<?php echo $row['id']; ?>"><i class="fa fa-check"></i></a></td>
                    <td><a class="btn btn-danger btn-xs" href="notapprove.php?id=<?php echo $row['id']; ?>"><i class="fa fa-trash-o "></i></a></td>
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
