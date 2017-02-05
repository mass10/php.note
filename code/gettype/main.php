#!/usr/bin/env php
<?php
function _diagnose($unknown) {

	$type = gettype($unknown);
	printf("[%s]\n", $type);
}

function _main() {

	_diagnose("2017-02-08");
	_diagnose(date_create("2017-02-08"));
	_diagnose(999.999);
	_diagnose(-12879875);
	_diagnose(2147483647);
	_diagnose(2147483648);
	_diagnose(null);
	_diagnose(NULL);
}

_main();
?>


