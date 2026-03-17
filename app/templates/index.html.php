<?php
declare(strict_types=1);

//error_reporting(E_All);
ini_set('display_errors', 1);


require_once __DIR__ . '/inc/debug.inc.php';
require_once __DIR__ . '/inc/bookmarks.inc.php';

$bookmarks = find_all();

require_once __DIR__ . '/templates/index.html.php';
