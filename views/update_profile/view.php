<form method="POST" action="index.php?redpage=update_profile" class="session">
    <?php
        if( isset( $_GET[ 'error' ] ) ){
            ?><div class="error">Δοκιμάστε ξανά.</div><?php
        }
    ?>
	<div>
        <label>Name:</label>
        <input type="text" name="name" value="<?php echo $user['name'];?>" />
    </div>
	<div>
        <label>Surname:</label>
        <input type="text" name="surname" value="<?php echo $user['surname'];?>" />
    </div>
    <div>
        <label>Location:</label>
        <input type="text" name="location" value="<?php echo $user['location'];?>" />
    </div>
    <div>
        <label>Occupation:</label>
        <input type="text" name="occupation" value="<?php echo $user['occupation'];?>" />
    </div>
    <div>
        <label>Interests:</label>
        <input type="text" name="interests" value="<?php echo $user['interests'];?>"/>
    </div>
	<div>
        <label>Website:</label>
        <input type="text" name="website" value="<?php echo $user['website'];?>"/>
    </div>
    <div>
        <input type="submit" value="Update!" />
    </div>
</form>