<?php
include('connection.php');
include('header.php');
include('menu.php');
$id = $_GET['id'];
$ires = mysqli_query($link,"select * from add_books where id='$id'");
$res = mysqli_query($link,"select * from add_books where id='$id'");
$image="";
while($img=mysqli_fetch_array($ires)){
    $image=$img['books_image'];
}
$row = mysqli_fetch_assoc($res);
?>
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3>Edit Books Info</h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div style="text-align: center;margin-bottom: 10px;">
                        <img src="../librarian/books_image/<?php echo $row['books_image']; ?>" width="150" height="150">
                    </div>
                    <form class="contact-form php-mail-form" action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <div class="form-group">
                            <input type="text" name="booksname" class="form-control" placeholder="books name" value="<?php echo $row['books_name']; ?>" required>
                        </div>
                        <div class="form-group">
                            books image
                            <input type="file" name="booksimage">
                        </div>
                        <div class="form-group">
                            <input type="text" name="bauthorname" class="form-control" placeholder="books author name" value="<?php echo $row['books_author_name']; ?>" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="pname" class="form-control" placeholder="publication name" value="<?php echo $row['books_publication_name']; ?>" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="bpurchasedt" class="form-control" placeholder="books purchase date" value="<?php echo $row['books_purchase_date']; ?>" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="bprice" class="form-control" placeholder="books price" value="<?php echo $row['books_price']; ?>" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="bqty" class="form-control" placeholder="books quantity" value="<?php echo $row['books_qty']; ?>" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="aqty" class="form-control" placeholder="available quantity" value="<?php echo $row['available_qty']; ?>" required>
                        </div>

                        <div class="form-send">
                            <button type="submit" class="btn btn-large btn-primary" name="submit1">edit books detail</button>
                            <button class="btn btn-large btn-primary"><a href="display_book.php">cancel</a></button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <?php
        if(isset($_POST['submit1'])){
            $id=$_POST['id'];
            $pimage=$_FILES['booksimage']['name'];
            if($pimage==""){
                mysqli_query($link,"update add_books set books_name='$_POST[booksname]',books_author_name='$_POST[bauthorname]',books_publication_name='$_POST[pname]',books_purchase_date='$_POST[bpurchasedt]',books_price='$_POST[bprice]',books_qty='$_POST[bqty]',available_qty='$_POST[aqty]' where id='$id'");
            }
            else {
                $tm = md5(time());
                $fnm = $_FILES['booksimage']['name'];
                $dst = "books_image/" . $tm . $fnm;
                $dst1 = $tm . $fnm;
                move_uploaded_file($_FILES['booksimage']['tmp_name'], $dst);
                unlink("books_image/".$image);

                mysqli_query($link,"update add_books set books_image='$dst1',books_name='$_POST[booksname]',books_author_name='$_POST[bauthorname]',books_publication_name='$_POST[pname]',books_purchase_date='$_POST[bpurchasedt]',books_price='$_POST[bprice]',books_qty='$_POST[bqty]',available_qty='$_POST[aqty]' where id='$id'");
            }
        ?>
            <script>
                alert('books edit successfully');
                setTimeout(function(){
                    window.location="display_book.php";
                },1000);
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
