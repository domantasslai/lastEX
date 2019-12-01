<?php include_once 'config/init.php'; ?>

<?php
$comment = new Sodra;

$template = new Template('templates/data_single.php');


$data_id = isset($_GET['id']) ? $_GET['id'] : null;

$template->comment= $comment->getSingle($data_id);
echo $template;
