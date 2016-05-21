<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="index.php" method="GET">
		<p>Name:<input type="text" name="username"></p>
		<p>Password:<input type="text" name="password"></p>
		<p><input type="submit" value="SUBMIT"></p>
	</form>
	<?php
		$username = $_GET["username"];
		$password = $_GET["password"];

		if (isset($username) && isset($password)){
			if(!empty($username) && !empty($password)){
				echo "Your username is <b>".$username."</b> and your password is <b>".$password."</b>";
			} else {
				echo "You didn't enter anything!";
			}
		}
	?>
</body>
</html>