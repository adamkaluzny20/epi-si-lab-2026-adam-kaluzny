<?php
require_once dirname(__DIR__) . '/inc/debug.inc.php';
require_once dirname(__DIR__) . '/inc/bookmarks.inc.php';

$title = 'Bookmarks';
$template = 'index';

$bookmarks = find_all();

require_once dirname(__DIR__) . '/templates/base.html.php';