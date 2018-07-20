#!/usr/bin/env php
<?php
require_once('lib/smarty-2.6.31/libs/Smarty.class.php');

class page {

	public function main() {

		$smarty = new Smarty();
		// $smarty->template_dir = "";
		$smarty->default_modifiers = array("escape");
		$smarty->assign("title", "<h1>ページのタイトル</h1>");
		$smarty->display("index.html");
	}
}

$page = new page();
$page->main();
?>
