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

<div id="postcomm">
	<h4>Add new Comment:</h4>
	<form method="POST" action="?redpage=blog&id=<?php echo $id;?>">
		<div>
			<label>Comment:</label>
			<textarea name="text" ></textarea>
		</div>
		<div>
			<input type="submit" value="Post!" />
		</div>
	</form>
</div>


<div id="comments">
	<ul class="list" id="comments">
			<?php if ($comment) {
					for($i=0;$i<count($comment);$i++) {
						echo "<li><div class='comment'>
						<p class='date'>Posted by: <a href=\"?redpage=profile&userid=".$comment[$i]['userid']."\">".$comment[$i]['username']."</a>
						on ".$comment[$i]['date']."</p>
						<p>".substr($comment[$i]['text'],0,256)."</p></div></li>";
					}
				}
			?>
		</ul>
</div>