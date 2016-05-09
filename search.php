
<?php
$title = "Search Movies";
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
				<?php foreach($movies as $movie):?>
					<div id = "content">
						<h1><?php echo $movie['title'];?></h1>
						<img src=<?php echo $movie['poster'];?> alt=<?php echo $movie['title'] ?> w = 100 h = 100>
						<br>
						
						<form action="." method="post">
							<input type = "hidden" name = "action" value = "movie">
							<input type = "hidden" name = "movieID" value = <?php echo $movie['movieID'];?>>
							<input type = "submit" value = "View">
						</form>
					</div>
				<?php endforeach ?>
				
            </div>
            <footer>
                <p>WhiteOnRice</p>
            </footer>
        </div>
    </body>
</html>