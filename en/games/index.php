<?php
$lang = 'en';

require_once $_SERVER['DOCUMENT_ROOT'] . '/_backend/preload.php';

$page['subtitle'] = 'Games';
$page['name'] = 'games';

include $template['header'];

$blog_full = false;
$blog_path = 'game';
$blog_articles = null;
$blog_skipmeta = true;
include $template['blog'];

include $template['footer'];
?>
