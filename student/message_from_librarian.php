<?php
	include('header.php');
	include('menu.php');
	include('connection.php');
	mysqli_query($link,"update message set read1='yes' where dusername='$_SESSION[username]'");
?>
    <section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4>Message from librarian</h4>
                <hr>
                <thead>
                  <tr>
                    <th>Full Name</th>
                    <th>Title</th>
                    <th>Message</th>
                  </tr>
                </thead>
				<?php
					$res=mysqli_query($link,"select * from message where dusername='$_SESSION[username]' order by id desc");
					while($row=mysqli_fetch_assoc($res)):
				?>
                <tbody>
                  <tr>
                    <td><?php echo $row['susername']; ?></td>
					<td><?php echo $row['title']; ?></td>
					<td><?php echo $row['msg']; ?></td>
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
