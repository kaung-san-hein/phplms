<?php
	include('header.php');
	include('menu.php');
	include('connection.php');
?>
    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3>Add Books Info</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="col-lg-6 col-md-6 col-sm-6">
            <form class="contact-form php-mail-form" action="" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <input type="text" name="booksname" class="form-control" placeholder="books name" required>
              </div>
			  <div class="form-group">
				books image
                <input type="file" name="booksimage" required>
              </div>
			  <div class="form-group">
                <input type="text" name="bauthorname" class="form-control" placeholder="books author name" required>
              </div>
			  <div class="form-group">
                <input type="text" name="pname" class="form-control" placeholder="publication name" required>
              </div>
			  <div class="form-group">
                <input type="text" name="bpurchasedt" class="form-control" placeholder="books purchase date" required>
              </div>
			  <div class="form-group">
                <input type="text" name="bprice" class="form-control" placeholder="books price" required>
              </div>
			  <div class="form-group">
                <input type="text" name="bqty" class="form-control" placeholder="books quantity" required>
              </div>
			  <div class="form-group">
                <input type="text" name="aqty" class="form-control" placeholder="available quantity" required>
              </div>
			  
              <div class="form-send">
                <button type="submit" class="btn btn-large btn-primary" name="submit1">insert books detail</button>
              </div>

            </form>
          </div>
          </div>
        </div>
		<?php
			if(isset($_POST['submit1'])){
				$tm=md5(time());
				$fnm=$_FILES['booksimage']['name'];
				$dst="books_image/".$tm.$fnm;
				$dst1=$tm.$fnm;
				move_uploaded_file($_FILES['booksimage']['tmp_name'],$dst);
				mysqli_query($link,"insert into add_books values('','$_POST[booksname]','$dst1','$_POST[bauthorname]','$_POST[pname]','$_POST[bpurchasedt]','$_POST[bprice]','$_POST[bqty]','$_POST[aqty]','$_SESSION[librarian]')");
		?>
		<script type="text/javascript">
			alert('books insert successfully');
		</script>
		<?php
			}
		?>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <?php
		include('footer.php');
	?>
