<h2>Your Blog!</h2>

<div id="newpost">
<?php if($logged) {echo "
	<h3>New Post</h3>
	<form method=\"POST\" action=\"?redpage=userblog\">
		<div>
			<label>Title:</label>
			<input type=\"text\" name=\"title\" />
		</div>
		<div>
			<label>Text:</label>
			<textarea name=\"text\"></textarea>
		</div>
		<div>
			<input type=\"submit\" value=\"Post!\" />
		</div>
	</form>";}?>
</div>


<div id="userbloglist">
		<ul class="list" id="userblogs">
			<?php if (!$posts) {
					echo "There are no posts to show";
				}
				else {
					for($i=0;$i<count($userblog);$i++) {
						echo "<li><div class='post'>
						<h3><a href=\"?redpage=blog&id=".$userblog[$i]['blogid']."\">".$userblog[$i]['title']."</a><h3>
						<p class='date'>".$userblog[$i]['blogdate']."</p>
						<p>".substr($userblog[$i]['stuff'],0,150)."</p></li>";
					}
				}
		echo "</ul>";
		if ($page>1) {echo "<a href=?redpage=userblog&page=".($page-1)."><-Previous Page</a> &nbsp &nbsp &nbsp";}
		if ($posts&&count($userblog)==10) {echo "<a href=?redpage=userblog&page=".($page+1).">Next Page-></a>"; }?>
</div>

