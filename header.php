<!DOCTYPE html>
<html>
<div id="banner">             
            </div>
            
<nav id="navigation">
	<ul id="nav">
		<li><a href="index.php?action=home">Home</a></li>
		<li><a href="index.php?action=search">Search Movies</a></li>
		<!-- <li><a href=index.php?action=movie>Movies</a></li> -->
		<!-- <li><a href=index.php?action=review>Reviews</a></li> -->
		<li><a href=index.php?action=about>About</a></li>
		<?php
			if ($_SESSION['user']['role'] == 'admin'){
				?>
				<li><a href="index.php?action=admin_page">Admin Tools</a></li>
				<?php
			}
			if($_SESSION['user']['username'] != null){
				?>
				<li style="float:right"><a href="index.php?action=logout">Logout</a></li>
				<?php
			}else{
				?>
				<li><a href="index.php?action=login">Login</a></li>
				<?php
			}
		?>
	</ul>
</nav>
</html>
            
