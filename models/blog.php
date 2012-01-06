<?php
	//A function that takes the number of results requested (smallest and biggest) and the
	//way they are sorted (asc or desc) and returns all the information of the blogs
	function allBlogPosts($ground, $ceiling, $sort, $sortStyle='DESC') {
		if (!isset($ground)||!isset($ceiling)||!isset($sort)) {
			return "didn't send correct values";
        }
		$res = mysql_query(
                "SELECT
					* 
                FROM
                    blog
				LEFT JOIN
					login
				ON
					blog.userid=login.userid
                ORDER BY
					$sort $sortStyle
                LIMIT $ground, $ceiling ");
        //if(!mysql_num_rows($res)) {
		//	die(mysql_error());
        //}
		$i=0;
		$blog=array();
		$row=array();
        while ($row = mysql_fetch_assoc($res)) {
			$blog[$i]=$row;
			$i++;
			unset($blog[$i]); 
		}
		return $blog;
	}
	
	//A function that takes the userid and the number of results results requested (smallest and biggest) and the
	//way they are sorted (asc or desc) and returns all the information of the blogs from this user
	function userBlogPosts($userid, $ground, $ceiling, $sort, $sortStyle='DESC') {

		$res = mysql_query(
               "SELECT
					* 
                FROM
                    blog
				WHERE
					blog.userid=$userid
                ORDER BY
					$sort $sortStyle
                LIMIT $ground, $ceiling ");
        //if(!mysql_num_rows($res)) {
			//die(mysql_error());
        //}
		$i=0;
		$userblog=array();
        while ($row = mysql_fetch_array($res)) {
			$userblog[$i]=$row;
			$i++;
			unset($userblog[$i]);
		}
		return $userblog;
	}
	
	//function takes userid, title and text of a blog post and inserts it into the database
	function postBlog($userid, $title, $text) {
		$title=mysql_real_escape_string($title);
		$text=mysql_real_escape_string($text);
		$res=mysql_query(
			"INSERT INTO 
				blog ( userid, title, stuff, blogdate )
			VALUES
				( '$userid', '$title', '$text', NOW() )
			");
	}
	
	//function that given the blogid, returns the content of one blog
	function blog($blogid) {
		$res=mysql_query(
			"SELECT
				*
			FROM 
				blog
			WHERE
				blogid=$blogid");
	
	if(!mysql_num_rows($res)) {
			die(mysql_error());
    }
	
	$row=mysql_fetch_array($res);
	return $row;
	}
	
	//function that given the blogid returns the comments of that blog post
	function getComments($blogid) {
		$res=mysql_query(
			"SELECT
				*
			FROM
				comment
			LEFT JOIN
				login
			ON
				comment.userid=login.userid
			WHERE
				comment.blogid='$blogid'
			ORDER BY
				date DESC");
		
		if (!mysql_num_rows($res)) {
			return $comment=0;
		}
		
		$i=0;
		$comment=array();
		$row=array();
        while ($row = mysql_fetch_assoc($res)) {
			$comment[$i]=$row;
			$i++;
			unset($comment[$i]); 
		}
		return $comment;
	}
	
	//function that given the blogid, userid and the comment, posts a comment in the database
	function insertComment($blogid, $userid, $text) {
		$text=mysql_real_escape_string($text);
		$res=mysql_query(
			"INSERT INTO 
				comment ( blogid, userid, text, date )
			VALUES
				( '$blogid', '$userid', '$text', NOW() )
			");
	}
				
	