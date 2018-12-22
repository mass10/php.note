#!/usr/bin/env php
<?php
function _main() {

	$tree = [
		[
			"name" => "Jimi Hendrix",
			"address" => "〒604-8571 京都府京都市中京区寺町通御池上る上本能寺前町488番地",
			"email" => "jimi.hendrix@docomo.ne.jp"
		],
		[
			"name" => "Jimi Hendrix",
			"address" => "〒604-8571 京都府京都市中京区寺町通御池上る上本能寺前町488番地",
			"email" => "jimi.hendrix@docomo.ne.jp"
		],
		[
			"name" => "Jimi Hendrix",
			"address" => "〒604-8571 京都府京都市中京区寺町通御池上る上本能寺前町488番地",
			"email" => "jimi.hendrix@docomo.ne.jp"
		],
	];

	print(json_encode($tree, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
	print("\n");
}

_main();
?>