<!DOCTYPE html>
<html>
<p><?php echo $_SESSION['user']['username'];?></p>

<form action="." method="post">
	<input type="hidden" name="action" value="validate_user">
	<label>Email:</label>
	<input type="text" name="username">
	<br>
	<label>Password:</label>
	<input type="text" name="password">
	<input type="submit" value="Login">
</form> 

</html>