<?php 
	
	include "views/header.php";
	

	if (isset($_GET['page'])) {
		$page=$_GET['page'];
		$blogs=allBlogPosts($page*10-10, $page*10, 'blogdate');
		if (isset($blogs[0]['title'])) {
			$posts=true;
		}
		else {
			$posts=false;
		}
	}
	else {
		$page=1;
		$ground=0;
		$ceiling=10;
		$blogs=allBlogPosts($ground, $ceiling, 'blogdate');
		if (isset($blogs[0]['title'])) {
			$posts=true;
		}
		else {
			$posts=false;	
		}
	}
	
	include "views/globalblogs/view.php";
	include "views/footer.php";
	
?>