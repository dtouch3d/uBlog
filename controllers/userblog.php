<?php
require "/views/header.php";
//require "/models/blog.php";
/*----USABLE PARAMETERS FOR SHOW
$id=;
----these are default set---
$sort='blogdate';
$sortStyle='DESC';
$ground=0;
$ceiling=20;--------------------*/


$id=9;		//demo
//$_SESSION['userid'];
$logged=true;
if (isset($_GET['userid'])) {
	$id=$_GET['userid'];
	$logged=false;
}

if (isset( $_POST[ 'title' ])&&isset( $_POST[ 'text' ] )) {
	postBlog($id, $_POST[ 'title' ], $_POST[ 'text' ] );
	unset($_POST[ 'title' ]);
	unset($_POST[ 'text' ]);
}
		

	if (isset($_GET['page'])) {
		$page=$_GET['page'];
		$userblog=userBlogPosts($id, $page*10-10, $page*10, 'blogdate');
	}
	else {
		$page=1;
		$ground=0;
		$ceiling=10;
		$userblog=userBlogPosts($id, $ground, $ceiling, 'blogdate');
	}
	
	include "views/userblog/view.php";
	include "views/footer.php";
	
?>


