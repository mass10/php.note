#!/usr/bin/env php
<?php

function _main() {

	error_reporting(-1);
	ini_set("display_errors", 0);

	define("ABC", "abc");
	define("ABC", "ABC");
	print(ABC);
}

_main();
?>
