<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
    </head>
    <body>
        <div id="wrapper">
            <div id="banner">             
            </div>
            
            <nav id="navigation">
			    
                <ul id="nav">
                    <li><a href="index.php?action=home">Home</a></li>
				    <li><a href=index.php?action=search>Search Movies</a></li>
                    <!-- <li><a href=index.php?action=movie>Movies</a></li> -->
					<!-- <li><a href=index.php?action=review>Reviews</a></li> -->
					<li><a href=index.php?action=about>About</a></li>
					<!-- <li><a href=userprofile.php?action=userprofile>User Profile</a></li> -->
					<?php
						if($_SESSION['user']['username'] != null){
							?>
							<li><a href=index.php?action=profile>User Profile</a></li>
							<li><a href=index.php?action=logout>Logout</a></li>
							<?php
						}else{
							?>
							<li><a href=index.php?action=login>Login</a></li>
							<?php
						}
						if ($_SESSION['user']['role'] == 'admin'){
							?>
							<li><a href=index.php?action=admin_page>Admin Tools</a></li>
							<?php
						}
					?>
                </ul>
            </nav>
        </div>
    </body>
</html>
