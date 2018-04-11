#!/usr/bin/env php
<?php
function _illegal_operation() {

	throw new Exception("ユーザー定義例外");
}

function _main() {

	try {
		_illegal_operation();
		//print("Ok.\n");
	}
	catch (Exception $e) {
		echo($e);
	}
}

_main();


?>
