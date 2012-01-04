<div id="bloglist">
		<ul class="list" id="globalblogs">
			<?php if (!$posts) {
					echo "There are no posts to show";
				}
				else {
					for($i=0;$i<count($blogs);$i++) {
						echo "<li><div class='post'>
						<h3><a href=\"?redpage=blog&id=".$blogs[$i]['blogid']."\">".$blogs[$i]['title']."</a><h3>
						<p class='date'>Posted by: <a href=\"?redpage=profile&userid=".$blogs[$i]['userid']."\">".$blogs[$i]['username']."</a>
						on ".$blogs[$i]['blogdate']."</p>
						<p>".substr($blogs[$i]['stuff'],0,150)."</p></li>";
					}
				}
			?>
		</ul>
		<?php if ($page>1) {echo "<a href=?redpage=globalblogs&page=".($page-1)."><-Previous Page</a> &nbsp &nbsp &nbsp";}
		if ($posts) {echo "<a href=?redpage=globalblogs&page=".($page+1).">Next Page-></a>"; }?>
</div>