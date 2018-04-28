<!DOCTYPE html>
<html>
	<head>
		<title>Querying Database (mysql interface)</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
<body>
<?php
// NOTE: The 'mysql' interface is no longer supported from PHP version 7.0.0 onwards.
// Use 'mysqli' interface instead.
//
	$db_host = "localhost";
	$db_user = "tstusr";
	$db_pass = "abc123";		// NOTE: *never* specify the password like this in a real script
	$db_name = "db_test";

	$connect = mysql_connect($db_host, $db_user, $db_pass) or die(mysql_error());
	mysql_select_db($db_name);

	$query = "select * from address";
	$results = mysql_query($query) or die(mysql_error());

	echo "<table border='1'>\n";
	while($row = mysql_fetch_assoc($results))
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

	mysql_close($connect);
?>
</body>
</html>

