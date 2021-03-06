<?php
//creates cookie
error_reporting(0);
$lifetime = 60 * 60 * 24;
session_set_cookie_params($lifetime, '/');
session_start();

require('./model/databaseDB.php');
require('./model/database.php');

// sets default action
$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = $_GET['action'];
    if ($action === NULL) {
        $action = 'home';
    }
}

if ($action == 'home'){
	//display the home page
	include('home.php');
	
} else if ($action == 'login'){
	// display the login page
	include('login.php');
	
} else if ($action == 'validate_user'){
	//retrieves data from form and sends it for validation
	$username = filter_input(INPUT_POST, 'username');
	$password = filter_input(INPUT_POST, 'password');
	$message = $password;
	$_SESSION['user'] = get_user($username, $password);
	$message = $_SESSION['user']['username'];
	if($_SESSION['user']['username'] != NULL){
		include('home.php');
	}else{
		$_SESSION['user'] = NULL;
		$message = "Username or password was incorrect";
		include('login.php');
	}
	
} else if ($action == 'logout'){
	//log the user out
	$_SESSSION['user'] = NULL;
	session_unset();
	include('home.php');
	
} else if ($action == 'admin_page'){
	//display the admin page
	adminTools();
	
} else if($action == 'add_movie'){
	//code to add movie to database
	$trailer = filter_input(INPUT_POST, 'trailer');
	$releaseDate = filter_input(INPUT_POST, 'releaseDate');
	$director = filter_input(INPUT_POST, 'director');
	$title = filter_input(INPUT_POST, 'title');
	$description = filter_input(INPUT_POST, 'description');
	$poster = filter_input(INPUT_POST, 'poster');
	
	$releaseDate = null;
	
	add_movie($trailer, $releaseDate, $director, $title, $description, $poster);
	
	adminTools();
	
} else if($action == 'delete_movie'){
	//code to delete movie from database
	
} else if($action == 'add_user'){
	//code to add user to database
	$username = filter_input(INPUT_POST, 'username');
	$password = filter_input(INPUT_POST, 'password');
	$email = filter_input(INPUT_POST, 'email');
	$role = filter_input(INPUT_POST, 'role');
	$message = $username;
	add_user($username, $password, null, $email, $role);
	include('login.php');
	
} else if($action == 'create_user'){
	//code to add user to database
	$username = filter_input(INPUT_POST, 'username');
	$password = filter_input(INPUT_POST, 'password');
	$email = filter_input(INPUT_POST, 'email');
	$role = filter_input(INPUT_POST, 'role');
	if($username != null && $password != null && $email != null &&  $role != null){
		$message = $username;
		add_user($username, $password, null, $email, $role);
		$_SESSION['user'] = get_user($username, $password);
		include('home.php');
	}else{
		include('createAccount.php');
	}
} else if($action == 'delete_user'){
	//code to delete user from database
	
} else if ($action == 'search'){
	//code to handle search page
	$filter = filter_input(INPUT_POST, 'filter');
	$message = $filter;
	if($filter != null){
		$movies = search_movies($filter);
	}else{
		$movies = get_movies();
	}
	include('search.php');
	
}else if ($action == 'about'){
	//move to about page
	include('about.php');
	
}else if($action == 'movie'){
	//move to filled out movie page
	$movieID = filter_input(INPUT_POST, 'movieID');
	moviepage($movieID);
	
}else if($action == 'add_review'){
	$movieID = filter_input(INPUT_POST, 'movieID');
	$userID = filter_input(INPUT_POST, 'userID');
	$username = filter_input(INPUT_POST, 'username');
	$rating = filter_input(INPUT_POST, 'rating');
	$ratingCount = filter_input(INPUT_POST, 'ratingCount');
	$movieRating = filter_input(INPUT_POST, 'movieRating');
	$review = filter_input(INPUT_POST, 'review');
	$message = $review;
	
	add_review($userID, $username, $movieID, $rating, $review);
	update_movie($movieID, $rating + $movieRating, $ratingCount + 1);
	moviepage($movieID);

}else if ($action == 'new_account'){
	include('createAccount.php');
	
}

//function to handle admin tools page once code is added to remove items
function adminTools() {
    include('adminTools.php');	
}
function moviepage($movieID){
	$message = $_SESSION['user']['username'];
	$review = user_review($movieID, $_SESSION['user']['username']);
	if($movieID == $review['movieID']){
		$reviewed = true;
	}else{
		$reviewed = false;
	}
	$reviews = get_reviews($movieID);
	$movie = get_movie($movieID);
	include('movie.php');
}


?>
