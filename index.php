<?php
/*
 * main controller for geeklife.social
 */


$action = "showHome";

$actionFiles = array();

$actionFiles['showHome'] 				= 	'includes/homePage.php';
$actionFiles['showDetail'] 				= 	'includes/detailPage.php';
$actionFiles['showEventCreate'] 		= 	'includes/eventCreatePage.php';


include($actionFiles[$action]);


?>