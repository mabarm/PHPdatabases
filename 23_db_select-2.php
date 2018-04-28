<!DOCTYPE html>
<html>
	<head>
		<title>Querying Database (mysqli interface)</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
<body>
<?php
	$db_host = "localhost";
	$db_user = "tstusr";
	$db_pass = "abc123";		// NOTE: *never* specify the password like this in a real script
	$db_name = "db_test";

	$connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

	/* check connection */
	if( mysqli_connect_errno($connect) )
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		exit();
	}

	/* query */
	if( $result = mysqli_query($connect, "select * from address") )
	{
		echo "Number of rows: " . mysqli_num_rows($result). "<br>";

		echo "<table border='1'>\n";
		while($row = mysqli_fetch_assoc($result))
		{
			echo "<tr>\n";
			foreach($row as $field_val)
			{
				echo "<td>\n";
				echo $field_val;
				echo "</td>\n";
			}
			echo "</tr>\n";
		}
		echo "</table>\n";

		/* free result set */
		mysqli_free_result($result);
	}

	mysqli_close($connect);
?>
</body>
</html>

