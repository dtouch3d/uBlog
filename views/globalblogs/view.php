<div id="bloglist">
		<ul class="list" id="globalblogs">
			<?php 
				for($i=0;$i<count($blog);$i++) {
					echo "<li><a href=\"userblog.php?userid=".$blog[$i]['userid']."\">".$blog[$i]['title']."</a></li>";
				}
			?>
		</ul>
		<?php echo "<a href=globalblogs.php?redpage=".($page-1)."><-Previous Page</a> &nbsp &nbsp &nbsp";
		echo "<a href=globalblogs.php?redpage=".($page+1).">Next Page-></a>"; ?>
</div>