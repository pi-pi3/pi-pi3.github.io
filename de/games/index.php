<?php
$lang = 'de';

require_once $_SERVER['DOCUMENT_ROOT'] . '/_backend/preload.php';

$page['subtitle'] = 'Spiele';
$page['name'] = 'games';

include $template['header'];

$blog_table = 'games';
include $template['blog'];

include $template['footer'];
?>
