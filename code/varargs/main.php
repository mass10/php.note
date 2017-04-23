#!/usr/bin/env php
<?php

function _func() {

	$args = func_get_args();
	foreach ($args as $e) {
		print("[".$e."] (".gettype($e).")");
		print("\n");
	}
}

function _main() {

	_func("", '', "xyz", 1.0, 99.99, 2147483647, 2147483648, 123.45, "aa bb cc dd", NULL, -1);
}

_main();
?>
