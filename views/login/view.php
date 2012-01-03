<form method="POST" action="index.php?redpage=login" class="session">
<div class="notice">Don't have an account? <a href="index.php?redpage=register">Register here.</a></div>

	<?php	
		if( isset( $_GET['error'] ) ){
			?><div class="error">Wrong username / password. Please try again.</div>		<?php
		}
	?>
    <div>
        <label>Username:</label>
        <input type="text" name="username" />
    </div>
    <div>
        <label>Password:</label>
        <input type="password" name="password" />
    </div>

	<div>
		<input type="submit" value="Login" />
	</div>
</form>
