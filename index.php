<?php include_once 'config/init.php'; ?>

<?php

$comment = new Sodra;

$template = new Template('templates/frontpage.php');

$code = isset($_POST['code']) ? $_POST['code'] : null;


if(isset($_POST['submit'])){
		$template->comments = $comment->getCsv($code);
}

if (isset($_POST['json'])) {
	$template->comment = $comment->exportToCvs($code);
}

echo $template;
