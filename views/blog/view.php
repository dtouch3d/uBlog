<div id="singleblog">
	<h3><?php echo $blog['title'];?></h3>
	<p class="date">Posted on: <?php echo $blog['blogdate'];?><p>
	<div id="content">
		<?php
			if (file_exists($blog['image'])) echo"<p><img src='".$blog['image']."' /></p>";
			echo "<p>".$blog['stuff']."</p>";
			?>
	</div>
</div>