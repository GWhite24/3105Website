
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