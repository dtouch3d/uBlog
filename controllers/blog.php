<?php
	include ("views/header.php");
	$red=false;
	if (isset($_GET['id'])) {
		$blog=blog($_GET['id']);
		$red=true;
	}
	include ("views/blog/view.php");
	include ("views/footer.php");
?>