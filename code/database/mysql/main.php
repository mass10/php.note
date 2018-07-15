#!/usr/bin/env php
<?php
function main() {

	$mysqli = new mysqli("127.0.0.1", "root", "", "information_schema", 3306);
	if ($mysqli->connect_errno) {
		echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	echo $mysqli->host_info . "\n";
	$result = $mysqli->query("select current_timestamp");
	while ($row = $result->fetch_array()) {
		echo $row[0];
	}
	$result->close();
	$mysqli->close();
}

main();
?>
