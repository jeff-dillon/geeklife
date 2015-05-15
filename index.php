<?php
/*
 * main controller for geeklife.social
 */


$actions = array();
$publicActions[0] = 'showHomePage';
$publicActions[1] = 'showDetailPage';
$publicActions[2] = 'showEventCreate';
$publicActions[3] = 'doRSVP';

if($action == 'showHomePage') {
	//get the list of events
	
	//display the page
	echo "Hello, World!";
}
?>