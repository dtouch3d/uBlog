<?php /*<div class="image" id="avatar">
	<img src="images/<?php echo "$user['image']" ?>" alt="Profile pic"/>
</div>*/
?>

<div id="user_inf">
	<?php echo "<p>".$user['username']."</p><p>".$user['email']."</p>"?>
</div>

<div id="profile_inf">
		<ul class="list" id="profile">
			<li>Full Name: <?php echo $user['name']." ".$user['surname']?></li>
			<li>Location: <?php $input='location'; echo $user['location']; ?></li>
			<li>Occupation: <?php $input='occupation'; echo $user['occupation']; ?></li>
			<li>Interests: <?php $input='interests'; echo $user['interests']; ?></li>
			<li>Website: <?php $input='website'; echo $user['website']; ?></li>
			<li>Posts: <?php echo $user['posts']?></li>
		</ul>
		<?php if ($logged) {
				echo "<a href='index.php?redpage=update_profile'>Edit</a>";}
				?>
</div>