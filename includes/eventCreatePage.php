<?php


?>

<html>
	<head><title>Create Event</title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	</head>
	<body>
		<h1>Create Event</h1>
    <form action="index.php" method="post">
    	<input type="hidden" name="action" value="showHome" />
      Your Name: <input type="text" name="name"><br>
      E-mail: <input type="text" name="email"><br>
      Location: <input type="text" name="location"><br>
      Description: <input type="text" name="desc"><br>
      <input type="submit">
    </form>
	</body>
</html>
