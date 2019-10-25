<?php
	include('header.php');
	include('menu.php');
	include('connection.php');
?>
    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3>Send Message To Student</h3>
        <div class="row mt">
          <div class="col-lg-12">
			<?php $res=mysqli_query($link,"select * from student_registration"); ?>
            <div class="col-lg-6 col-md-6 col-sm-6">
            <form class="contact-form php-mail-form" action="" method="post" enctype="multipart/form-data">
              <div class="form-group">
				<select class="form-control" name="dusername">
					<option>--Choose Name--</option>
					<?php while($row=mysqli_fetch_array($res)){ ?>
					<option value="<?php echo $row['username']; ?>"><?php echo $row['username']."(".$row['enrollment'].")"; ?></option>
					<?php } ?>
				</select>
			  </div>
			  <div class="form-group">
                <input type="text" name="title" class="form-control" placeholder="title" required>
              </div>
			  <div class="form-group">
				Message
				<textarea name="msg" class="form-control">
				</textarea>
			  </div>
			  <div class="form-send">
                <button type="submit" class="btn btn-large btn-primary" name="submit1">send message</button>
              </div>
			 </form>
			</div>
          </div>
        </div>

        <?php
            $res=mysqli_query($link,"select * from issue_books where books_return_date=''");
        ?>
        <h3>Students List To Return Books</h3>
        <div class="row mt">
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
                            <th>To Return date</th>
                            <th>Past Days</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $TodayDate = strtotime(date("d-m-Y"));
                            while($row = mysqli_fetch_assoc($res)):

                                $toReturnDate = strtotime($row['to_return_date']);
                                if($TodayDate > $toReturnDate) {
                                    $pastDays = ceil(($TodayDate - $toReturnDate)) / 60 / 60 / 24;
                                    ?>
                                    <tr>
                                        <td><?php echo $row['student_enrollment']; ?></td>
                                        <td><?php echo $row['student_name']; ?></td>
                                        <td><?php echo $row['student_contact']; ?></td>
                                        <td><?php echo $row['student_email']; ?></td>
                                        <td><?php echo $row['books_name']; ?></td>
                                        <td><?php echo $row['books_issue_date']; ?></td>
                                        <td><?php echo $row['to_return_date']; ?></td>
                                        <td><?php echo $pastDays; ?></td>
                                    </tr>
                                    <?php
                                }
                            endwhile;
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
          </div>

      </section>
	  <?php
		if(isset($_POST['submit1'])){
			mysqli_query($link,"insert into message values('','$_SESSION[librarian]','$_POST[dusername]','$_POST[title]','$_POST[msg]','no')");
	  ?>
		<script type="text/javascript">
			alert("message send successfully");
		</script>
	  <?php
		}
	  ?>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <?php
		include('footer.php');
	?>
