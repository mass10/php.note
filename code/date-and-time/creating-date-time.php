#!/usr/bin/env php
<?php

function _main() {

	{
		$date = date_create("2017-02-03");
		printf("[%s]\n", $date->format("Y-m-d"));
		printf("[%s]\n", $date->format("Y-m-d H:i:s"));
	}

	{
		$date = new DateTime();
		printf("[%s]\n", $date->format("Y-m-d"));
		printf("[%s]\n", $date->format("Y-m-d H:i:s"));
	}

	{
		$date = new DateTime("2010-01-01 12:25:59.000");
		printf("[%s]\n", $date->format("Y-m-d"));
		printf("[%s]\n", $date->format("Y-m-d H:i:s"));
	}
}

_main();
?>
