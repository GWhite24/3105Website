<!DOCTYPE html>
<?php include('template.php')?>
<html>
<!--add user-->
<p>add user</p>
<form action="." method="post">
	<input type ="hidden" name="action" value="add_user">
	
	<label>Username:</label>
	<input type = "text" name = "username">
	<br>
	<label>password:</label>
	<input type = "text" name = "password">
	<br>
	<label>Email:</label>
	<input type = "text" name = "email">
	<br>
	<label>Role:</label>
	<select name = "role">
		<option value = "admin">admin</option>
		<option value = "user">user</option>
	</select>
	<br>
	<input type = "submit" value = "add User">
</form> 
<!--delete user-->


<!--add movie-->

<p>add movies</p>
<form action="." method="post">
	<input type ="hidden" name="action" value="add_movie">
	
	<label>Title:</label>
	<input type = "text" name = "title">
	<br>
	<label>Director:</label>
	<input type = "text" name = "director">
	<br>
	<label>Movie image link:</label>
	<input type = "text" name = "poster">
	<br>
	<label>Movie trailer link:</label>
	<input type = "text" name = "trailer">
	<br>
	<label>Release Date:</label>
	<input type = "text" name = "release date">
	<br>
	<label>Description:</label>
	<textarea name = "description" rows="4" cols="50"></textarea>
	<br>
	
	<input type = "submit" value = "add Movie">
</form>

<!--delete movie-->


</html>