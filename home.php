<!DOCTYPE html>
<?php $title = 'Spoiled Bananas Homepage';?>
<?php
$content = '
        <img src="Images/banner.jpg" class="imgLeft" />
        <h3>Spoiled Bananas</h3>
        <br>

        <img src="Images/b2.jpg" class="imgRight" />
		
        <h3>Purpose</h3>
        <p>
            A web application that will allow users to look and search through a database of

movie, then the user will be able to read reviews on the movie. The readers can read reviews, also view 

trailers for the movie, and see comments about the movie left by other viewers.  The user will also be 

able to create an account where they will be able to log in to make their own comments and reviews. 

Also when logged in they will be able to add the movie to a shopping cart for checkout. This web 

application will be great for movie enthusiasts to find new movies they may want to watch, and for 

movie buffs to help others in the search for great movies
         </p>

         <img src="Images/b3.jpg" class="imgLeft" />
         <h3>Welcome!</h3>
         <p>
            Spoiled Bananas is a website containing information about movies: information, news, reviews and ratings, pictures, etc.
         </p>';
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
    </head>
    <body>
        <div id="wrapper">
            <?php include ('header.php'); ?>
			
            <div id="content_area">
                <?php echo $content; ?>
            </div>     
            <footer>
                <p>WhiteOnRice</p>
            </footer>
        </div>
    </body>
</html>

