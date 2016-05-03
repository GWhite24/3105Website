<?php
$lifetime = 60 * 60 * 24;
session_set_cookie_params($lifetime, '/');
session_start();

require('./model/databaseDB.php');
require('./model/database.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
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
	include('home.php');
	
} else if ($action == 'admin_page'){
	//display the admin page
	include('adminTools.php');
}
// space for admin functions

// end space for admin functions
else if ($action == 'search'){
	$filter = filter_input(INPUT_POST, 'filter');
	
	include('search.php');
}else if ($action == '')

?>
