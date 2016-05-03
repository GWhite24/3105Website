
<?php
	$dsn = 'mysql:host=localhost;dbname=tech_support';
    $username = 'ts_user';
    $password = 'pa55word';


// functions pulling from the movie table	
function get_movie() {
    global $db;
    $query = 'SELECT * FROM movies';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;    
}
function add_movie($movieID, $trailer, $releaseDate, $director, $title, $description){
	global $db;
	$query = 'INSERT INTO movies
					(movieID, trailer, releaseDate, director, title, description)
				VALUES
					(:movieID, :trailer, :releaseDate, :director, :title, :description)';
	$statement = $db->prepare($query);
	$statement->bindValue(':movieID', $movieID);
	$statement->bindValue(':trailer', $trailer);
	$statement->bindValue(':releaseDate', $releaseDate);
	$statement->bindValue(':director', $director);
	$statement->bindValue(':title', $title);
	$statement->bindValue(':description', $description);
	$statement->execute();
	$statement->closeCursor();
}

function delete_movie($movieID){
	global $db;
	$query = 'DELETE FROM movies
			  WHERE movieID = :movieID';
	$statement->
	$statement->bindValue(':movieID', $movieID);
    $statement->execute();
    $statement->closeCursor();
}

//functions pulling from the reviews table
function get_reviews($movieID){
	global $db;
    $query = 'SELECT * FROM movies
			  WHERE movieID = :movieID';
    $statement = $db->prepare($query);
	$statement->bindValue(':movieID', $movieID);
    $statement->execute();
    return $statement;
}

//functions pulling from the user table
function get_user($username, $password){
	
	global $db;
    $query = 'SELECT * FROM userInfo
			  WHERE username = :username AND password = :password';
    $statement = $db->prepare($query);
	$statement->bindValue(':username', $username);
	$statement->bindValue(':password', $password);
    $statement->execute();
	$user = $statement -> fetch();
	$statement->closeCursor();
    return $user;
}
function add_user($userID, $username, $password, $birthday, $email, $role){
	global $db;
	$query = 'INSERT INTO userInfo
					(userID, username, password, birthday, email, role)
				VALUES
					(:userID, :username, :password, :birthday, :email, :role)';
	$statement = $db->prepare($query);
	$statement->bindValue(':userID', $userID);
	$statement->bindValue(':username', $username);
	$statement->bindValue(':password', $password);
	$statement->bindValue(':birthday', $birthday);
	$statement->bindValue(':email', $email);
	$statement->bindValue(':role', $role);
	$statement->execute();
	$statement->closeCursor();
}
function delete_user($userID){
	global $db;
	$query = 'DELETE FROM userInfo
			  WHERE userID = :userID';
	$statement->
	$statement->bindValue(':userID', $userID);
    $statement->execute();
    $statement->closeCursor();
}
function update_user($userID, $username, $password, $birthday, $email, $role){
	global $db;
	$query = 'UPDATE userInfo
			  SET username = :username, password = :password, birthday = :birthday, email = :email, role = :role
			  WHERE userID = :userID';
	$statement = $db->prepare($query);
	$statement->bindValue(':userID', $userID);
	$statement->bindValue(':username', $username);
	$statement->bindValue(':password', $password);
	$statement->bindValue(':birthday', $birthday);
	$statement->bindValue(':email', $email);
	$statement->bindValue(':role', $role);
	$statement->execute();
	$statement->closeCursor();
}
?>