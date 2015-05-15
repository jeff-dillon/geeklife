<?php
/*
 * main controller for geeklife.social
 */

 require_once 'includes/lib.php';
 
 //------------------------------------------------------------------------------------
//
//  Connect to the database
//
//------------------------------------------------------------------------------------


$link = mysql_connect($env_mysql_host, $env_mysql_user, $env_mysql_password);
mysql_select_db($env_mysql_database);
if(!$link) {
	die('Could not connect: ' . mysql_error());
}

$action = "showHome";

// get the current action from request
if( isset($_REQUEST["action"]) ) {
	$action = $_REQUEST["action"];
} 

// get the current action from request
if( isset($_REQUEST["name"]) ) {
	$name = $_REQUEST["name"];
	$email = $_REQUEST["email"];
	$location = $_REQUEST["location"];
	$desc = $_REQUEST["desc"];
	
	createPost($name, $email, $location, $desc);
}

$actionFiles = array();

$actionFiles['showHome'] 				= 	'includes/homePage.php';
$actionFiles['showDetail'] 				= 	'includes/detailPage.php';
$actionFiles['createEvent'] 		= 	'includes/eventCreatePage.php';

$postList = getPosts();

include($actionFiles[$action]);


?>