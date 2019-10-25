<?php
	include('connection.php');
	include('header.php');
	include('menu.php');
?>
    <section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-12">
			<div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4>Display Books</h4>
				<form action="" method="post">
					<input type="text" name="bookname" class="form-control" placeholder="enter books name">
					<br>
					<button type="submit" class="btn btn-primary" name="submit1">search</button>
			    </form>
				<?php
				if(isset($_POST['submit1'])){
					$res=mysqli_query($link,"select * from add_books where books_name like '%$_POST[bookname]%'");
				}
				else{
					$res=mysqli_query($link,"select * from add_books");
				}
				?>
                <hr>
                <thead>
                  <tr>
                    <th>books image</th>
					<th>books name</th>
                    <th>author name</th>
					<th>publication name</th>
					<th>purchase date</th>
					<th>books price</th>
					<th>books quantity</th>
                    <th>available quantity</th>
                    <th>update</th>
					<th>delete</th>
                  </tr>
                </thead>
				<?php while($row=mysqli_fetch_assoc($res)): ?>
                <tbody>
                  <tr>
					<td><img src="books_image/<?php echo $row['books_image']; ?>" width="100" height="100"></td>
                    <td><?php echo $row['books_name']; ?></td>
					<td><?php echo $row['books_author_name']; ?></td>
					<td><?php echo $row['books_publication_name']; ?></td>
					<td><?php echo $row['books_purchase_date']; ?></td>
					<td><?php echo $row['books_price']; ?></td>
					<td><?php echo $row['books_qty']; ?></td>
                    <td><?php echo $row['available_qty']; ?></td>
                    <td><a class="btn btn-primary btn-xs" href="edit.php?id=<?php echo $row['id']; ?>"><i class="fa fa-pencil"></i></a></td>
                    <td><a class="btn btn-danger btn-xs" href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you really delete?')"><i class="fa fa-trash-o "></i></a></td>
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
