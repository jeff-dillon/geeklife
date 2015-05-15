<?php

?>

<html>
	<head><title>Home Page</title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	</head>
	<body>
		<h1>Home Page</h1>
		<?foreach ($postList as $p) {
			echo $p['user_name'] . "<br>";
		}
		?>
	</body>
</html>