
<?php
	$dsn = 'mysql:host=localhost;dbname=tech_support';
    $username = 'ts_user';
    $password = 'pa55word';
	
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
function get_reviews($movieID){
	global $db;
    $query = 'SELECT * FROM movies
			  WHERE movieID = :movieID';
    $statement = $db->prepare($query);
	$statement->bindValue(':movieID', $movieID);
    $statement->execute();
    return $statement;
}
function get_user($username, $password){
	global $db;
    $query = 'SELECT * FROM userInfo
			  WHERE username = :username AND password = :password';
    $statement = $db->prepare($query);
	$statement->bindValue(':username', $username);
	$statement->bindValue(':password', $password);
    $statement->execute();
    return $statement;
}
function add_user(){
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

function delete_product($productCode) {
    global $db;
    $query = 'DELETE FROM products
              WHERE productCode = :productCode';
    $statement = $db->prepare($query);
    $statement->bindValue(':productCode', $productCode);
    $statement->execute();
    $statement->closeCursor();
}

function add_product($productCode, $name, $version, $releaseDate) {
    global $db;
    $query = 'INSERT INTO products
                 (productCode, name, version, releaseDate)
              VALUES
                 (:productCode, :name, :version, :releaseDate)';
    $statement = $db->prepare($query);
    $statement->bindValue(':productCode', $productCode);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':version', $version);
    $statement->bindValue(':releaseDate', $releaseDate);
    $statement->execute();
    $statement->closeCursor();
}
?>