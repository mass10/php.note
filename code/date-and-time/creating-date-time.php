#!/usr/bin/env php
<?php

function _main() {

	{
		printf("--- %s ---\n", __LINE__);
		$date = new DateTime();
		printf("[%s]\n", $date->getTimestamp());
		printf("[%s]\n", $date->format("Y-m-d"));
		printf("[%s]\n", $date->format("Y-m-d H:i:s"));
	}

	{
		printf("--- %s ---\n", __LINE__);
		$date = date_create("2017-02-03");
		printf("[%s]\n", $date->getTimestamp());
		printf("[%s]\n", $date->format("Y-m-d"));
		printf("[%s]\n", $date->format("Y-m-d H:i:s"));
	}

	{
		printf("--- %s ---\n", __LINE__);
		$date = new DateTime();
		$date->setDate(2000, 2, 10);
		$date->setTime(0, 0, 0);
		printf("[%s]\n", $date->getTimestamp());
		printf("[%s]\n", $date->format("Y-m-d"));
		printf("[%s]\n", $date->format("Y-m-d H:i:s"));
	}

	{
		printf("--- %s ---\n", __LINE__);
		$date = new DateTime("2010-01-01 12:25:59.000");
		printf("[%s]\n", $date->getTimestamp());
		printf("[%s]\n", $date->format("Y-m-d"));
		printf("[%s]\n", $date->format("Y-m-d H:i:s"));
	}
}

_main();
?>
