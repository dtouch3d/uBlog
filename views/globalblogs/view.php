<div id="bloglist">
		<ul class="list" id="globalblogs">
			<?php 
				for($i=0;$i<count($blog);$i++) {
					echo "<li><a href=\"?redpage=userblog?userid=".$blog[$i]['userid']."\">".$blog[$i]['title']."</a></li>";
				}
			?>
		</ul>
		<?php echo "<a href=?redpage=globalblogs&page=".($page-1)."><-Previous Page</a> &nbsp &nbsp &nbsp";
		echo "<a href=?redpage=globalblogs&page=".($page+1).">Next Page-></a>"; ?>
</div>