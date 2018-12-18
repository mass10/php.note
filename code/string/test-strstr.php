#!/usr/bin/env php
<?php
function _test() {

	$source = "aaaaaaabbbbbbbb ccccccccc ddddddddd eeeeeeee";
	$test = mb_strstr($source, "b c");
	if (!$test) {
		print("[TRACE] not found.");
		return;
	}
	printf("[TRACE] FOUND! [%s]\n", $test);
}

function _main() {

	_test();
}

_main();
?>

