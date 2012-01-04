<?php
	unset($_SESSION['userid']);
	unset($_SESSION['username']);
	header("location: index.php");
	?>