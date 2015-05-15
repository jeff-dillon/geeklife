<?php

$env_mysql_host = "mysql.cragnotes.com";
$env_mysql_database = "hack_db";
$env_mysql_user = "hack_db_user";
$env_mysql_password = "#4ckp4ss";

/**
 * get a list of all of the states from the states table for use in drop-down box
 * @return assoc of states
 */
function getPosts() {
	$sql = 'SELECT post_id, user_name, user_email, post_content, post_address, post_date, event_date from posts';
	$result = mysql_query($sql);
	
	if(!$result) {
		$message = 'Invalid query in getStates() : ' . mysql_error() . "\n";
		$message .= 'Whole query: ' . $sql;
		die($message);
	}
	
	$posts = array();
	$i = 0;
	while($s = mysql_fetch_assoc($result)) {
		$posts[$i]=$s;
		$i++;
	}
	
	mysql_free_result($result);
	
	return $posts;
}

?>