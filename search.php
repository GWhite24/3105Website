<?php
$title = "Search";
$content = '
        <img src="Images/banner.jpg" class="imgLeft" />
        <h3>Spoiled Bananas</h3>
        <p>

        </p>

        <img src="Images/b2.jpg" class="imgRight" />
        <h3>Search page</h3>
        <p>
			This page will have a form with a text entry to search for movie titles and give the results below the form.
         </p>

         <img src="Images/b3.jpg" class="imgLeft" />
         <h3>Welcome!</h3>
         <p>
            Spoiled Bananas is a website containing information about movies: information, news, reviews and ratings, pictures, etc.
         </p>';
include 'Template.php';
?>
<?php echo $message?>
<!-- div for search bar -->
<div>
	<form action="." method="post">
		<input type = "hidden" name ="action" value = "search">
		<label>Filter movies by title: </label>
		<br>
		<input type = "text" name = "filter">
		<input type = "submit" value = "Search">
		
		
	</form>
</div>
<br>
<br>

<!-- div to handle move listings in the serch page -->
<?php foreach($movies as $movie):?>
<div>
	<img src=<?php echo $movie['poster'];?> alt="Mountain View" w = 100 h = 100>
	<br>
	<?php echo $movie['title'];?>
	<form action="." method="post">
		<input type = "hidden" name = "action" value = "movie">
		<input type = "hidden" name = "movieID" value = <?php echo $movie['movieID'];?>>
		<input type = "submit" value = "View">
	</form>
</div>


<?php endforeach ?>
