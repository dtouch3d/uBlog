<?php
    echo '<?xml version="1.0" encoding="utf8"?>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="el" lang='el'>
<head>
<title>uBlog</title>
<link rel="stylesheet" type="text/css" href="css/global.css" />
</head>
<body>
<div class='header'>
<a href="index.php"><img src="images/logo.png"/></a>
<p><a class='menuit' href="index.php?redpage=globalblogs">Global</a>
<a class='menuit' href="index.php?redpage=userblog">Personal</a>
<a class='menuit' href="index.php?redpage=profile">Profile</a>
<?php 
	  if (isset($_SESSION['userid'])) {
			echo "<a class='menuit' href=\"index.php?redpage=logout\">Logout</a>";}?>
</p>
</div>
<div id='box'> </div>
<div class="container">