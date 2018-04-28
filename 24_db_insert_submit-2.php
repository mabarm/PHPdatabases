<!DOCTYPE html>
<html>
	<head>
		<title>Insert data (mysqli interface)</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
<body>
<?php
	$db_host = "localhost";
	$db_user = "tstusr";
	$db_pass = "abc123";		// for example only!
	$db_name = "db_test";

	$connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

	/* check connection */
	if( mysqli_connect_errno($connect) )
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		exit();
	}
	
	$full_name = $_REQUEST['txtName'];
	$full_address = $_REQUEST['txtAddress'];

	if( ( strlen(trim($full_name)) > 0) && ( strlen(trim($full_address)) > 0 ) )
	{
		$full_name = "'" . $full_name . "'";
		$full_address = "'" . $full_address . "'";

		$query = "insert into address(fname, faddress) values($full_name, $full_address)";

		/* run query */
		if( mysqli_query($connect, $query) == TRUE )
		{
			echo "Done<br>\n";
		}
	}
	else
	{
		echo "Can not insert empty string<br>\n";
	}

	mysqli_close($connect);
?>
</body>
</html>

