<?php
    include('connection.php');
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$res=mysqli_query($link,"select books_image from add_books where id='$id'");
		$image="";
		while($row=mysqli_fetch_array($res)){
			$image=$row['books_image'];
		}
		unlink("books_image/".$image);
		mysqli_query($link,"delete from add_books where id='$id'");
		header('location:display_book.php');
	}
?>