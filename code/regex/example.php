#!/usr/bin/env php
<?php

function _is_alpha($s) {

	return preg_match("/\A[a-zA-Z]+\z/", $s);
}

function _is_number($s) {

	return preg_match("/\A[0-9]+\z/", $s);
}

function _test_number($s) {

	printf("is_number? [%s] >>> [%s]\n", $s, _is_number($s));
}

function _test_alphabet($s) {

	printf("is_alpha? [%s] >>> [%s]\n", $s, _is_alpha($s));
}

function _main() {

	_test_number("");
	_test_number(" ");
	_test_number("  ");
	_test_number("1231414@123.com");
	_test_number("１２３４５６");
	_test_number("jJhsyqX");
	_test_number("一二三");
	_test_number("Joktuhbb jHAs jasY");
	_test_number("    1     3  6  2  ");
	_test_number("0000000");
	_test_number("12345");
	_test_number("12345.9802");

	_test_alphabet("");
	_test_alphabet(" ");
	_test_alphabet("  ");
	_test_alphabet("jAiulm-kSNh");
	_test_alphabet("    has         ");
	_test_alphabet("A");
	_test_alphabet("a");
	_test_alphabet("jasiuq.ksaiuqe");
	_test_alphabet("Ａ");
	_test_alphabet("Ｂ");

	$left = "";
	print_r(preg_match("/name=([^&]+)/", "?name=jimi.hendrix&user_id=a18f500f-534b-4ded-b79e-6d6c60d21fb6", $match));
	var_dump($match);
}

_main();
?>
