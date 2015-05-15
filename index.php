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

$actionFiles = array();

$actionFiles['showHome'] 				= 	'includes/homePage.php';
$actionFiles['showDetail'] 				= 	'includes/detailPage.php';
$actionFiles['showEventCreate'] 		= 	'includes/eventCreatePage.php';

$postList = getPosts();

include($actionFiles[$action]);


?>