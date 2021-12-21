<?php
include("config.php");

if (isset($_POST['Edit'])) {
 	if (isset($_GET['id'])) {
 		$id = $_GET['id'];
 		$title = $_POST['title'];
 		$price = $_POST['price'];
 		$content = $_POST['content'];
 	
 	$sql = "UPDATE post SET title='$title', price='$price',id='$id', content='$content' WHERE id = '$id'";
 	$query = mysqli_query($db,$sql);

 		if ($query == TRUE) {
 			header('Location:daftarkost.php?status=sukses&action=edit');
		} else {
 			header('Location:daftarkost.php?status=gagal&action=edit');
 		}
 	}

} else {
 die("Akses dilarang...");
}