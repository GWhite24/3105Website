<?php
$content = '
        <img src="Images/banner.jpg" class="imgLeft" />
        <h3>Spoiled Bananas</h3>
        <p>

        </p>

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
include 'Template.php';
?>
<!DOCTYPE html>
<html>
	<!-- div for handling titile -->
	<head>
		<title><?php echo $movie['title'];?></title>
	</head>
	
	<!-- div for handling the display of the movie data  -->
	<br>
	<?php echo $message;?>
	<br>
	<div>
		<?php echo $movie['title'];?>
		<?php echo $movie['director'];?>
		<?php echo $movie['releaseDate'];?>
		<?php echo $movie['description'];?>
		<?php echo $movie['poster'];?>
		<?php echo $movie['trailer'];?>
	</div>
	
	<!-- div for handleing user comments -->
	<?php foreach ($reviews as $review):?>
		<div>
			<?php echo $review['username'];?>
			<?php echo $review['rating'];?>
			<br>
			<?php echo $review['review'];?>
		</div>
	<?php endforeach; ?>
	
	
	<!-- div for handling review field -->
	<div>
		<form action = "." method = "post" >
			<input type = "hidden" name = "action" value = "add_review">
			<input type = "hidden" name = "movieID" value = <?php echo $movie['movieID'];?> >
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
			<textarea name = "review" rows = 6 col = 100></textarea>
			<input type ="submit" value = "Submit Review">
		</form>
	</div>
</html>