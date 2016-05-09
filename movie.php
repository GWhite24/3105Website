<?php
$title = $movie['title'];
?>
<!DOCTYPE html>
<?php $title = 'Spoiled Bananas Homepage';?>
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
                <!-- div for handling the display of the movie data  -->
				<div>
					<h1><?php echo $movie['title'];?></h1>
					<img src=<?php echo $movie['poster'];?> alt=<?php echo $movie['title'] ?> w = 100 h = 100>
					<br>
					<p> Directed by: <?php echo $movie['director'];?> </p>
					<p> Released:<?php echo $movie['releaseDate'];?> </p>
					<p><?php echo $movie['description'];?></p>
					<?php //echo $movie['trailer'];?>
				</div>
				
				<!-- div for handleing user comments -->
				<?php foreach ($reviews as $review):?>
					<div id = "content_area">
						<p>User <?php echo $review['username'];?> Said:
						<br>
						<?php echo $review['review'];?>
						<p><?php echo $review['rating'];?> out of 5</p>
						<br>
					</div>
				<?php endforeach; ?>
				
				
				<!-- div for handling review field -->
				<div>
					<?php if ($reviewed == false){ ?>
					<form action = "." method = "post" >
						<input type = "hidden" name = "action" value = "add_review">
						<input type = "hidden" name = "movieID" value = <?php echo $movie['movieID'];?> >
						<input type = "hidden" name = "movieRating" value = <?php echo $movie['rating'];?> >
						<input type = "hidden" name = "ratingCount" value = <?php echo $movie['ratingCount'];?> >
						<input type = "hidden" name = "username" value = <?php echo $_SESSION['user']['username'];?> >
						<input type = "hidden" name = "userID" value = <?php echo $_SESSION['user']['userID'];?> >
						<label>Rating</label>
						<select name = "rating">
							<?php for($i = 5; $i >= 1; $i--){ ?>
								<option value = <?php echo $i;?>><?php echo $i;?></option>
								<?php
							} ?>
						</select>
						<br>
						<label>What did you think?</label>
						<br>
						<textarea name = "review" rows = 6 col = 500></textarea>
						<br>
						<input type ="submit" value = "Submit Review">
					</form>
					<?php } ?>
				</div>
            </div>     
            <footer>
                <p>WhiteOnRice</p>
            </footer>
        </div>
    </body>
</html>
<!DOCTYPE html>
<html>
	
</html>