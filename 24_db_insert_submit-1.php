<!DOCTYPE html>
<html>
	<head>
		<title>Insert Data (mysql interface)</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
<body>
<?php
// NOTE: The 'mysql' interface is no longer supported from PHP version 7.0.0 onwards.
// Use 'mysqli' interface instead.
//
	$db_host = "localhost";
	$db_user = "tstusr";
	$db_pass = "abc123";		// for example only!
	$db_name = "db_test";

	$connect = mysql_connect($db_host, $db_user, $db_pass) or die(mysql_error());
	mysql_select_db($db_name);

	$full_name = $_REQUEST['txtName'];
	$full_address = $_REQUEST['txtAddress'];

	if( ( strlen(trim($full_name)) > 0) && ( strlen(trim($full_address)) > 0 ) )
	{
		$full_name = "'" . $full_name . "'";
		$full_address = "'" . $full_address . "'";

		$query = "insert into address(fname, faddress) values($full_name, $full_address)";
		$results = mysql_query($query) or die(mysql_error());

		echo "Done<br>\n";
	}
	else
	{
		echo "Can not insert empty string<br>\n";
	}

	mysql_close($connect);
?>
</body>
</html>

