<!DOCTYPE html>
<?php $title = 'Login'; ?>
<html>
<?php include('header.php'); ?>
<div id="content_area">
	<form action="." method="post">
		<input type="hidden" name="action" value="validate_user">
		<label>Email:</label>
		<input type="text" name="username">
		<br>
		<label>Password:</label>
		<input type="text" name="password">
		<input type="submit" value="Login">
	</form>
</div>
<a href=index.php?action=new_account>Create new account</a>

<?php include('footer.php'); ?>
</html>
