#!/usr/bin/env php
<?php
function timestamp1() {

	$time_array = localtime();
	$sec = $time_array[0];
	$min = $time_array[1];
	$hour = $time_array[2];
	$day = $time_array[3];
	$month = 1 + $time_array[4];
	$year = 1900 + $time_array[5];
	return sprintf("%04d-%02d-%02d %02d:%02d:%02d", $year, $month, $day, $hour, $min, $sec);
}

function main() {

	echo timestamp1(), "\n";
	echo date("c"), "\n";
}

main();
?>
