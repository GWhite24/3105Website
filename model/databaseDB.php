
<?php
	$dsn = 'mysql:host=localhost;dbname=tech_support';
    $username = 'ts_user';
    $password = 'pa55word';


// functions pulling from the movie table	
function get_movies() {
    global $db;
    $query = 'SELECT * FROM movies';
    $statement = $db->prepare($query);
    $statement->execute();
	$movies = $statement -> fetchALL();
	$statement->closeCursor();
    return $movies;    
}
function get_movie($movieID) {
    global $db;
    $query = 'SELECT * FROM movies
			  WHERE movieID = :movieID';
    $statement = $db->prepare($query);
	$statement->bindValue(':movieID', $movieID);
    $statement->execute();
	$movie = $statement -> fetch();
	$statement->closeCursor();
    return $movie;    
}
// searches movie based on filter
function search_movies($filter) {
    global $db;
    $query = 'SELECT * FROM movies
			  WHERE title LIKE %' . $filter . '%';
    $statement = $db->prepare($query);
	//$statement->bindValue(':filter', $filter);
    $statement->execute();
	$movies = $statement -> fetchALL();
	$statement->closeCursor();
    return $movies;    
}

function add_movie($trailer, $releaseDate, $director, $title, $description, $poster){
	global $db;
	$query = 'INSERT INTO movies
					(trailer, releaseDate, director, title, description, poster)
				VALUES
					(:trailer, :releaseDate, :director, :title, :description, :poster)';
	$statement = $db->prepare($query);
	$statement->bindValue(':poster', $poster);
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
	$statement-> $db->prepare($query);
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
	$reviews = $statement -> fetchALL();
	$statement->closeCursor();
    return $reviews;
}
function add_review($username, $movieID, $rating, $review){
	global $db;
	$query = 'INSERT INTO userInfo
					(username, movieID, rating, review)
				VALUES
					(:username, :movieID, :rating, :review)';
	$statement = $db->prepare($query);
	$statement->bindValue(':username', $username);
	$statement->bindValue(':movieID', $movieID);
	$statement->bindValue(':rating', $rating);
	$statement->bindValue(':review', $review);
	$statement->execute();
	$statement->closeCursor();
}


//functions pulling from the user table
function get_users(){
	
	global $db;
    $query = 'SELECT * FROM userInfo';
    $statement = $db->prepare($query);
    $statement->execute();
	$user = $statement -> fetchALL();
	$statement->closeCursor();
    return $user;
}
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
function add_user($username, $password, $birthday, $email, $role){
	global $db;
	$query = 'INSERT INTO userInfo
					(username, password, birthday, email, role)
				VALUES
					(:username, :password, :birthday, :email, :role)';
	$statement = $db->prepare($query);
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