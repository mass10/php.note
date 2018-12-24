#!/usr/bin/env php
<?php
function _dump($unknown) {

	if (is_array($unknown)) {
		foreach ($unknown as $index => $item) {
			_dump($item);
		}
	}
	else {
		print("[");
		print($unknown);
		print("]");
	}
}

function _main() {

	$html_source = file_get_contents("main.php");
	$tokens = token_get_all($html_source);
	// var_dump($tokens);
	// print_r($tokens);

	_dump($tokens);
}

_main();
?>
