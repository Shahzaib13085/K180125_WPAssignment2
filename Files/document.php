<?php
	session_start();
	if ($_SESSION["Login"] != "YES") {
		header("Location: Files/form.php");
		// code...
	}
	?>
	<html>
		<head>
			<title>
				Document
			</title>
		</head>
		<body>
			<h1>THIS DOCUMENT IS PROTECTED</h1>
			<p>YOU CAN ONLY SEE IT WHEN YOU ARE LOGGED IN</p>
		</body>
	</html>
