<?php
	//A function that given the userid returns the details of the profile
	//of the requested user
	function getProfileDetails($userid) {
		
		$res = mysql_query(
                "SELECT
                    *
                FROM
                    user
				INNER JOIN
					login
				ON
					user.userid=login.userid
                WHERE
                    user.userid = '$userid'
                LIMIT 1");
        if (!mysql_num_rows($res)) {
                die(mysql_error());
        }
        $row = mysql_fetch_array( $res );
			return $row;
	}
	
	function updateProfile($userid, $name, $surname, $location, $occupation, $interests, $website) {
	
	$res = mysql_query(
			"UPDATE
				user 
			SET 
				name='$name', surname='$surname', location='$location', occupation='$occupation', interests='$interests', website='$website' 
			WHERE 
				userid='$userid'");
	}
	
	//User login function
	function login( $username, $password ){
		$username=sanitize( $username );
		$password=hash("sha1", $password );

		$res = mysql_query(
			"SELECT
				*
		 	FROM 
				login	
			WHERE
				username='$username'
				
				AND
	
				password='$password'
			  ");
		if( mysql_num_rows($res) == 0 ){
			return false;
       	 	}
		mysql_query(
			"UPDATE
				login
			SET
				enter = 1
			WHERE
				username = '$username'
			");
		$row=mysql_fetch_array( $res );	
		$_SESSION['userid'] = $row['userid'];
		$_SESSION['username'] = $username;

        	return $row;
	}
	
	//User registration function
	function register( $name, $password, $email ){
		$name = sanitize ( $name );
		$email = sanitize ( $email );
		$passwordHash = hash("sha1", $password );
		
		$exists = mysql_query(
			"SELECT
				userid
			FROM
				login
			WHERE
				username = '$name'
			");
		if( mysql_num_rows( $exists ) > 0 ){
			die("Username exists!");
		}
		
		
		$insertToLogin = mysql_query(
			"INSERT INTO 
				login ( username, password, email, created )
			VALUES
				( '$name', '$passwordHash', '$email', NOW() )
			");

		$userid = mysql_insert_id();

		$insertToUser = mysql_query(
			"INSERT INTO
				user ( userid )
			VALUES
				( '$userid' )
			");

		if( !isset($insertToLogin)
		   || !isset($insertToUser)
		   || !isset($userid) ){
        	    	//If something went wrong, delete added records, just in case.
        	    	//Basically maybe it doesn't work really well, what if duplicate username???
			mysql_query(
				"DELETE FROM
					login
				 WHERE
					userid = '$userId'
				");

			mysql_query(
				"DELETE FROM
					user
				WHERE
					userid = '$userId'
				");

			die( "MySQL error during register" );
		}
			$_SESSION['userid'] = $userid;
			$_SESSION['username'] = $name;
        	return array(
			//mysql_insert_id return last auto-incremented value from last query
			//in this case, userid from table user
            		"userid" => mysql_insert_id(),
            		"username" => $name
        	);
    	}		

	//Sanitizes input to prevent SQl injections
	function sanitize($input){
		if( get_magic_quotes_gpc() ){
			$input=stripslashes($input);
		}	

		$input=mysql_real_escape_string($input);
		return $input;
	}
?>
