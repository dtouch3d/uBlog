<?php
	include ("views/header.php");
	
	if (isset($_GET['id'])) {
		$id=$_GET['id'];
		if (isset($_POST['text'])) {
			insertComment($_GET['id'], $_SESSION['userid'], $_POST['text']);
			unset($_POST['text']);
		}
		$blog=blog($_GET['id']);
		$comment=getComments($_GET['id']);
		include ("views/blog/view.php");
	}
	
	include ("views/footer.php");
?>