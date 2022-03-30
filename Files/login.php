<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>
	<?php
	session_start();
	if ($_POST["username"] == "Shahzaib" && $_POST["password"] == "K180125") {
		$_SESSION["Login"] = "YES";
		echo "<h1>You are logged in correctly</h1>";
		echo "<p><a href ='document.php'>Link to protected file</a></p> ";

		// code...
	}
	else
	{
		$_SESSION["Login"] = "NO";
		echo "<h1>You are logged in correctly</h1>";
		echo "<p><a href ='document.php'>Link to protected file</a></p> ";

	}?>

</body>
</html>