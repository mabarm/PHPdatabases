<!DOCTYPE html>
<html>
	<head>
		<title>Show form data</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
<body>
	<h3>
	The form data submitted are:
	<br>
	Full Name :
	<font color="teal">
		<?php
			echo $_GET["fullname"];
		?>
	</font>
	<br>
	Address :
	<font color="teal">
		<?php
			echo $_GET["address"];
		?>
	</font>
	</h3>
</body>
</html>

