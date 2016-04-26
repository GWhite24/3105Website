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
                    <li><a href="index.php">Home</a></li>
				    <li><a href="search.php">Search</a></li>
                    <li><a href="movie.php">Movies</a></li>
					<li><a href="review.php">Reviews</a></li>
					<li><a href="userprofile.php">User Profile</a></li>
                    <li><a href="about.php">About Us</a></li>
                </ul>
            </nav>
            
            <div id="content_area">
                <?php echo $content; ?>
            </div>
            
            <div id="sidebar">
                
            </div>
            
            <footer>
                <p>WhiteOnRice</p>
            </footer>
        </div>
    </body>
</html>
