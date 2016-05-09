<!DOCTYPE html>
<?php $title = 'Login'; ?>
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
				<form action="." method="post">
					<input type="hidden" name="action" value="validate_user">
					<label>Email:</label>
					<br>
					<input type="text" name="username">
					<br>
					<label>Password:</label>
					<br>
					<input type="text" name="password">
					<br>
					<input type="submit" value="Login">
				</form>
			</div>   
            <footer>
                <p>WhiteOnRice</p>
            </footer>
        </div>
    </body>
</html>
