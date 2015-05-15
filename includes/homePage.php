<?php

?>

<html>
	<head><title>Home Page</title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link rel="stylesheet" href="../style.css" />
	</head>
	<body>
		 <header>
    <img src="http://i.imgur.com/Kh8ZJS7.png" alt="logo">
    <hr/>
    <nav>
      <a href="index.php">Home</a>
    </nav>
  </header>
		<h1>Home Page</h1>
		<a href="index.php?action=createEvent">Create Event</a><br><br>
		<!--
		<table>
			<thead>
				<td>User</td>
				<td>Event</td>
				<td>Address</td>
				<td>Date</td>
			</thead>
		-->
		<?foreach ($postList as $p) {
			echo '<div>';
			echo '<p class="user">' . $p['user_name'] . '';
			echo ' created an event on ' . $p['event_date'] . '</p>';
			
			echo '<p class="content">' . $p['post_content'] . '</p>';
			echo '<p>Join us at: ' . $p['post_address'] . '</p>';
			echo '<hr /></div>';
		}
		
		?>
		</table>
	</body>
</html>