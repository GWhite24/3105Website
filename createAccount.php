<!DOCTYPE html>
<html>
<p><?php echo $_SESSION['user']['username'];?></p>

<form action="." method="post">
	<input type="hidden" name="action" value="validate_user">
	<label>Email:</label>
	<input type="text" name="username">
	<br>
	<label>Username:</label>
	<br>
	<label>Password:</label>
	<input type="text" name="password">
	<br>
	<label>Birthday:</label>
	<input type="text" name="birthday">
	<br>
	<input type="submit" value="Login">
	<br>
	<label>
</form> 

</html>