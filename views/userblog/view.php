<h2>Your Blog!</h2>

<div id="userbloglist">
		<ul class="list" id="userblogs">
			<?php 
				for($i=0;$i<count($userblog);$i++) {
					echo "<li><a href=\"?redpage=userblog&userid=".$userblog[$i]['userid']."\">".$userblog[$i]['title']."</a></li>";
				}
			?>
		</ul>
		<?php if ($page>1) {echo "<a href=?redpage=userblog&page=".($page-1)."><-Previous Page</a> &nbsp &nbsp &nbsp";}
		echo "<a href=?redpage=userblog&page=".($page+1).">Next Page-></a>"; ?>
</div>

<div id="newpost">
<?php if($logged) {echo "
	<h3>New Post</h3>
	<form method=\"POST\" action=\"?redpage=userblog\">
		<div>
			<input type=\"text\" name=\"title\" />
		</div>
		<div>
			<textarea name=\"text\"></textarea>
		</div>
		<div>
			<input type=\"submit\" value=\"Post!\" />
		</div>
	</form>";}?>
</div>